PGDMP  
                  	    |            lead    15.8    16.4     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16398    lead    DATABASE     {   CREATE DATABASE lead WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Portuguese_Brazil.1252';
    DROP DATABASE lead;
                postgres    false            �            1259    16400    lead    TABLE     �   CREATE TABLE public.lead (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    telefone character varying(15) NOT NULL
);
    DROP TABLE public.lead;
       public         heap    postgres    false            �            1259    16399    lead_id_seq    SEQUENCE     �   CREATE SEQUENCE public.lead_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.lead_id_seq;
       public          postgres    false    215            �           0    0    lead_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.lead_id_seq OWNED BY public.lead.id;
          public          postgres    false    214            e           2604    16403    lead id    DEFAULT     b   ALTER TABLE ONLY public.lead ALTER COLUMN id SET DEFAULT nextval('public.lead_id_seq'::regclass);
 6   ALTER TABLE public.lead ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    215    215            �          0    16400    lead 
   TABLE DATA           9   COPY public.lead (id, nome, email, telefone) FROM stdin;
    public          postgres    false    215   W
       �           0    0    lead_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.lead_id_seq', 27, true);
          public          postgres    false    214            g           2606    16407    lead lead_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.lead
    ADD CONSTRAINT lead_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.lead DROP CONSTRAINT lead_pkey;
       public            postgres    false    215            �   @   x�32�tK-�K�KIT�O,J-Vp��ˬ�,I-.I542vH�M���K���46��4� �=... a��     