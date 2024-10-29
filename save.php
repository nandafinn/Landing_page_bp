<?php
// Conexão com o banco de dados
header('Content-Type: application/json');

$host = 'localhost';
$port = '5432';
$dbname = 'lead';
$user = 'postgres';
$password = '123';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die(json_encode(["error" => "Erro ao conectar ao banco de dados."]));
}

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rdstation_token = 'edc7ac6e0c845c7b6c511e04b5105c4e'; // Preencha com o token correto

// Verificar se o e-mail já existe
$check_query = "SELECT * FROM lead WHERE email = $1";
$check_result = pg_query_params($conn, $check_query, array($email));

if (pg_num_rows($check_result) > 0) {
    // Retornar erro para o formulário
    echo json_encode(["error" => "Este e-mail já está cadastrado. Por favor, use outro e-mail."]);
    exit();
}

// Enviar para o RD Station (sem validação)
$api_url = "https://www.rdstation.com.br/api/1.2/conversions";
$data_array = [
    'token_rdstation' => $rdstation_token,
    'email' => $email,
    'nome' => $nome,
    'telefone' => $telefone
];

$data_query = http_build_query($data_array);
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_query);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_exec($ch);

// Enviar para o RD Station (sem validação)
$api_url = "https://www.rdstation.com.br/api/1.2/conversions";
$data_array = [
    'token_rdstation' => $rdstation_token,
    'email' => $email,
    'nome' => $nome,
    'telefone' => $telefone
];

$data_query = http_build_query($data_array);
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_query);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
print_r($response);
// if (!$response) {
//     echo json_encode(["error" => "Erro ao enviar dados para o RD Station: " . curl_error($ch)]);
//     exit(); // Encerra o script caso ocorra erro na cURL
// }
curl_close($ch);

curl_close($ch);

// Salvar no banco de dados
$query = "INSERT INTO lead (nome, email, telefone) VALUES ($1, $2, $3)"; // Removido o campo 'rd'
$result = pg_query_params($conn, $query, array($nome, $email, $telefone));

if ($result) {
    // Retornar sucesso para o formulário
    header("Location: http://localhost/lp_bemprotege/form_enviado.html", true, 302); exit;
} else {
    // Retornar erro ao cadastrar
    echo json_encode(["error" => "Erro ao cadastrar."]);
    error_log("Erro ao cadastrar: " . pg_last_error($conn));
}
try {
    $response = curl_exec($ch);
    print_r($response);
    // if (!$response) {
    //     echo json_encode(["error" => "Erro ao enviar dados para o RD Station: " . curl_error($ch)]);
    // }
    curl_close($ch);
} catch (\Throwable $th) {
    echo $th;
}



// Fechar a conexão
pg_close($conn);
?>
