PGDMP                     	    v         
   plataforma    10.4    10.0 B    `           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            a           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            b           1262    16465 
   plataforma    DATABASE     �   CREATE DATABASE plataforma WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Portuguese_Brazil.1252' LC_CTYPE = 'Portuguese_Brazil.1252';
    DROP DATABASE plataforma;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            c           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            d           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16784    address    TABLE     �  CREATE TABLE address (
    id integer NOT NULL,
    street character varying(40) NOT NULL,
    number integer NOT NULL,
    neighborhood character varying(40) NOT NULL,
    zipcode character varying(10) NOT NULL,
    city character varying(40) NOT NULL,
    state character varying(2) NOT NULL,
    cpf_service_provider character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.address;
       public         postgres    false    3            �            1259    16782    address_id_seq    SEQUENCE        CREATE SEQUENCE address_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.address_id_seq;
       public       postgres    false    3    212            e           0    0    address_id_seq    SEQUENCE OWNED BY     3   ALTER SEQUENCE address_id_seq OWNED BY address.id;
            public       postgres    false    211            �            1259    16508    categoria_produto    TABLE     e   CREATE TABLE categoria_produto (
    cat_id integer NOT NULL,
    cat_nome character varying(255)
);
 %   DROP TABLE public.categoria_produto;
       public         postgres    false    3            �            1259    16511    categoria_produto_cat_id_seq    SEQUENCE     �   CREATE SEQUENCE categoria_produto_cat_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.categoria_produto_cat_id_seq;
       public       postgres    false    3    196            f           0    0    categoria_produto_cat_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE categoria_produto_cat_id_seq OWNED BY categoria_produto.cat_id;
            public       postgres    false    197            �            1259    16513    marcas_produtos    TABLE     {   CREATE TABLE marcas_produtos (
    mar_id integer NOT NULL,
    mar_nome character varying(255),
    mar_cat_id integer
);
 #   DROP TABLE public.marcas_produtos;
       public         postgres    false    3            �            1259    16516    marcas_produtos_mar_id_seq    SEQUENCE     �   CREATE SEQUENCE marcas_produtos_mar_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.marcas_produtos_mar_id_seq;
       public       postgres    false    3    198            g           0    0    marcas_produtos_mar_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE marcas_produtos_mar_id_seq OWNED BY marcas_produtos.mar_id;
            public       postgres    false    199            �            1259    16639 
   migrations    TABLE     �   CREATE TABLE migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         postgres    false    3            �            1259    16637    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       postgres    false    3    201            h           0    0    migrations_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE migrations_id_seq OWNED BY migrations.id;
            public       postgres    false    200            �            1259    16741    password_resets    TABLE     �   CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         postgres    false    3            �            1259    16761 	   profissao    TABLE     �   CREATE TABLE profissao (
    id integer NOT NULL,
    nome_profissao character varying(25) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.profissao;
       public         postgres    false    3            �            1259    16759    profissao_id_seq    SEQUENCE     �   CREATE SEQUENCE profissao_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.profissao_id_seq;
       public       postgres    false    208    3            i           0    0    profissao_id_seq    SEQUENCE OWNED BY     7   ALTER SEQUENCE profissao_id_seq OWNED BY profissao.id;
            public       postgres    false    207            �            1259    16769    service_provider    TABLE     K  CREATE TABLE service_provider (
    id integer NOT NULL,
    name character varying(150) NOT NULL,
    email character varying(120) NOT NULL,
    password character varying(255) NOT NULL,
    cpf character varying(11) NOT NULL,
    sexy character varying(255) NOT NULL,
    data_nascimento date NOT NULL,
    profissao character varying(255) NOT NULL,
    telephone1 character varying(11) NOT NULL,
    telephone2 character varying(11) NOT NULL,
    landline character varying(10) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 $   DROP TABLE public.service_provider;
       public         postgres    false    3            �            1259    16767    service_provider_id_seq    SEQUENCE     �   CREATE SEQUENCE service_provider_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.service_provider_id_seq;
       public       postgres    false    3    210            j           0    0    service_provider_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE service_provider_id_seq OWNED BY service_provider.id;
            public       postgres    false    209            �            1259    16796    servicos    TABLE     �   CREATE TABLE servicos (
    ser_id integer NOT NULL,
    ser_name character varying(255),
    ser_status boolean DEFAULT false
);
    DROP TABLE public.servicos;
       public         postgres    false    3            �            1259    16800    servicos_ser_id_seq    SEQUENCE     �   CREATE SEQUENCE servicos_ser_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.servicos_ser_id_seq;
       public       postgres    false    213    3            k           0    0    servicos_ser_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE servicos_ser_id_seq OWNED BY servicos.ser_id;
            public       postgres    false    214            �            1259    16750    static_contents    TABLE     �   CREATE TABLE static_contents (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    content character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 #   DROP TABLE public.static_contents;
       public         postgres    false    3            �            1259    16802    static_content_id_seq    SEQUENCE     �   CREATE SEQUENCE static_content_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.static_content_id_seq;
       public       postgres    false    206    3            l           0    0    static_content_id_seq    SEQUENCE OWNED BY     B   ALTER SEQUENCE static_content_id_seq OWNED BY static_contents.id;
            public       postgres    false    215            �            1259    16748    static_contents_id_seq    SEQUENCE     �   CREATE SEQUENCE static_contents_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.static_contents_id_seq;
       public       postgres    false    206    3            m           0    0    static_contents_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE static_contents_id_seq OWNED BY static_contents.id;
            public       postgres    false    205            �            1259    16728    users    TABLE     I  CREATE TABLE users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    sexy character varying(255) NOT NULL,
    cpf_cnpj character varying(255) NOT NULL,
    tipo_id integer NOT NULL,
    date_birth date NOT NULL,
    phone1 character varying(255) NOT NULL,
    phone2 character varying(255) NOT NULL,
    address_id integer NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         postgres    false    3            �            1259    16726    users_id_seq    SEQUENCE     }   CREATE SEQUENCE users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public       postgres    false    203    3            n           0    0    users_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE users_id_seq OWNED BY users.id;
            public       postgres    false    202            �
           2604    16787 
   address id    DEFAULT     Z   ALTER TABLE ONLY address ALTER COLUMN id SET DEFAULT nextval('address_id_seq'::regclass);
 9   ALTER TABLE public.address ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    211    212    212            �
           2604    16804    categoria_produto cat_id    DEFAULT     v   ALTER TABLE ONLY categoria_produto ALTER COLUMN cat_id SET DEFAULT nextval('categoria_produto_cat_id_seq'::regclass);
 G   ALTER TABLE public.categoria_produto ALTER COLUMN cat_id DROP DEFAULT;
       public       postgres    false    197    196            �
           2604    16805    marcas_produtos mar_id    DEFAULT     r   ALTER TABLE ONLY marcas_produtos ALTER COLUMN mar_id SET DEFAULT nextval('marcas_produtos_mar_id_seq'::regclass);
 E   ALTER TABLE public.marcas_produtos ALTER COLUMN mar_id DROP DEFAULT;
       public       postgres    false    199    198            �
           2604    16806    migrations id    DEFAULT     `   ALTER TABLE ONLY migrations ALTER COLUMN id SET DEFAULT nextval('migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    200    201    201            �
           2604    16764    profissao id    DEFAULT     ^   ALTER TABLE ONLY profissao ALTER COLUMN id SET DEFAULT nextval('profissao_id_seq'::regclass);
 ;   ALTER TABLE public.profissao ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    207    208    208            �
           2604    16772    service_provider id    DEFAULT     l   ALTER TABLE ONLY service_provider ALTER COLUMN id SET DEFAULT nextval('service_provider_id_seq'::regclass);
 B   ALTER TABLE public.service_provider ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    210    209    210            �
           2604    16807    servicos ser_id    DEFAULT     d   ALTER TABLE ONLY servicos ALTER COLUMN ser_id SET DEFAULT nextval('servicos_ser_id_seq'::regclass);
 >   ALTER TABLE public.servicos ALTER COLUMN ser_id DROP DEFAULT;
       public       postgres    false    214    213            �
           2604    16808    static_contents id    DEFAULT     i   ALTER TABLE ONLY static_contents ALTER COLUMN id SET DEFAULT nextval('static_content_id_seq'::regclass);
 A   ALTER TABLE public.static_contents ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    215    206            �
           2604    16809    users id    DEFAULT     V   ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    203    202    203            Z          0    16784    address 
   TABLE DATA               �   COPY address (id, street, number, neighborhood, zipcode, city, state, cpf_service_provider, created_at, updated_at) FROM stdin;
    public       postgres    false    212   �G       J          0    16508    categoria_produto 
   TABLE DATA               6   COPY categoria_produto (cat_id, cat_nome) FROM stdin;
    public       postgres    false    196   �G       L          0    16513    marcas_produtos 
   TABLE DATA               @   COPY marcas_produtos (mar_id, mar_nome, mar_cat_id) FROM stdin;
    public       postgres    false    198   �H       O          0    16639 
   migrations 
   TABLE DATA               3   COPY migrations (id, migration, batch) FROM stdin;
    public       postgres    false    201   GK       R          0    16741    password_resets 
   TABLE DATA               <   COPY password_resets (email, token, created_at) FROM stdin;
    public       postgres    false    204   �K       V          0    16761 	   profissao 
   TABLE DATA               H   COPY profissao (id, nome_profissao, created_at, updated_at) FROM stdin;
    public       postgres    false    208   
L       X          0    16769    service_provider 
   TABLE DATA               �   COPY service_provider (id, name, email, password, cpf, sexy, data_nascimento, profissao, telephone1, telephone2, landline, created_at, updated_at) FROM stdin;
    public       postgres    false    210   'L       [          0    16796    servicos 
   TABLE DATA               9   COPY servicos (ser_id, ser_name, ser_status) FROM stdin;
    public       postgres    false    213   DL       T          0    16750    static_contents 
   TABLE DATA               N   COPY static_contents (id, title, content, created_at, updated_at) FROM stdin;
    public       postgres    false    206   �M       Q          0    16728    users 
   TABLE DATA               �   COPY users (id, name, email, password, sexy, cpf_cnpj, tipo_id, date_birth, phone1, phone2, address_id, remember_token, created_at, updated_at) FROM stdin;
    public       postgres    false    203   �M       o           0    0    address_id_seq    SEQUENCE SET     6   SELECT pg_catalog.setval('address_id_seq', 1, false);
            public       postgres    false    211            p           0    0    categoria_produto_cat_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('categoria_produto_cat_id_seq', 19, true);
            public       postgres    false    197            q           0    0    marcas_produtos_mar_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('marcas_produtos_mar_id_seq', 210, true);
            public       postgres    false    199            r           0    0    migrations_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('migrations_id_seq', 3, true);
            public       postgres    false    200            s           0    0    profissao_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('profissao_id_seq', 1, false);
            public       postgres    false    207            t           0    0    service_provider_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('service_provider_id_seq', 1, false);
            public       postgres    false    209            u           0    0    servicos_ser_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('servicos_ser_id_seq', 37, true);
            public       postgres    false    214            v           0    0    static_content_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('static_content_id_seq', 1, true);
            public       postgres    false    215            w           0    0    static_contents_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('static_contents_id_seq', 1, false);
            public       postgres    false    205            x           0    0    users_id_seq    SEQUENCE SET     4   SELECT pg_catalog.setval('users_id_seq', 1, false);
            public       postgres    false    202            Z      x������ � �      J   �   x��=N�0��S� ��P�Y�4�l<�v�;+�q�@�#�P�}�Y�%RG1�M��ةdt~�2�\B3FV�4�@�kh$���\�5�"	7p��8��O.~��[h�u��*��K�s �^���20^��D6����������s��k-tt"��4W��{?��=��2�%<H�C��
�(����t��n�?��w,fO�Ѯ���/2r6�|>G�_��XQ      L   i  x�]�An�0E��S��(Q"�t��)�� -��	kY4(�I�ӫ�b�#[��ռ?��?�#KZ�WKR�t}��o�Ye�\^�*ZE��]�9���W(mlc���
J����U ����tgwm�<�eBw�yg�t���&2�u�Eˏ�����nO�����i��9���U]u�ƺ���oߵ=���1�v9�%ME������K�n}�������]�nF?C�2)
Z�Vae"-��oCèi]���}��̆y:v&��Ar<)8��~_;R"�h��5 E絭��.�w��p������z��<sI7����R	ݺ���̒n���t������6��=*����|m[L�bN�4-�Kʅ2C@I��AyBW���u��\�"�kׄ?�9�a�*�q���F�*���_�㽀�?���?��r��iSrQ$�����	T�;��q�>Pj�̐�}rM�X�j�5s��f�k�%�.Qu��7O~xH�1=8W���־c;�M��Pcrp~̫�.Ny�4]�m`2�Q�iaN�*qu����!���Ĩ�s?S�~F�3�_y�+��_)O~e:�����:�A�\�8 ��a?��6��H�i�����̸pJ��"��2f@�      O   �   x�U��
�0���c$�:l�E��P�U�:�nʦ!o97��@���a�UB~�T��wи_��T_�&��Ҏ�_#��1y&���X[h9r,s��u��U�Ӏ,���ZnY5��%�Ǯ�[��s�q�KNRWG�s}F�!��P��r2Ƽ��IM      R      x������ � �      V      x������ � �      X      x������ � �      [   �  x�MQKN�0]OO����wYڂ@TB�b�f�]��a�"qĢ��c7AH�����L	���"v����a�`�9����ʆ�A
������_��Q:����%��g�)�SX㳭-�|�8�n���a��=X�ڻ`9f�mm#{��'D�>�/�E��̖p9�������rc|HDe	t�)[.ll��`Y���I"%4��m:��%X_���iL!9�9lC�9�L��+��!S.��;�&o7�|�HT	�Ȇ\Q)��|�M�+�8�V�CGZ�%4�~�^XM��3�!�2�h[�I�vb�<z��`���poͰ�j�c �*U)�ͺ�3�դZ)��y���²�j��ׁh
{l���ݏ�(y�����+�Jsx$�8�~��F���̲      T      x������ � �      Q      x������ � �     