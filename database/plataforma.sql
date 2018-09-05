PGDMP         &                v         
   plataforma    10.4    10.0                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false                       1262    16465 
   plataforma    DATABASE     �   CREATE DATABASE plataforma WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Portuguese_Brazil.1252' LC_CTYPE = 'Portuguese_Brazil.1252';
    DROP DATABASE plataforma;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false                       0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false                       0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16468 
   migrations    TABLE     �   CREATE TABLE migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         postgres    false    3            �            1259    16466    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       postgres    false    3    197                       0    0    migrations_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE migrations_id_seq OWNED BY migrations.id;
            public       postgres    false    196            �            1259    16487    password_resets    TABLE     �   CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         postgres    false    3            �            1259    16496    static_contents    TABLE     �   CREATE TABLE static_contents (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    content character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 #   DROP TABLE public.static_contents;
       public         postgres    false    3            �            1259    16494    static_content_id_seq    SEQUENCE     �   CREATE SEQUENCE static_content_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.static_content_id_seq;
       public       postgres    false    202    3                       0    0    static_content_id_seq    SEQUENCE OWNED BY     B   ALTER SEQUENCE static_content_id_seq OWNED BY static_contents.id;
            public       postgres    false    201            �            1259    16476    users    TABLE     <  CREATE TABLE users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         postgres    false    3            �            1259    16474    users_id_seq    SEQUENCE     }   CREATE SEQUENCE users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public       postgres    false    199    3                       0    0    users_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE users_id_seq OWNED BY users.id;
            public       postgres    false    198            �
           2604    16471    migrations id    DEFAULT     `   ALTER TABLE ONLY migrations ALTER COLUMN id SET DEFAULT nextval('migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    197    196    197            �
           2604    16499    static_contents id    DEFAULT     i   ALTER TABLE ONLY static_contents ALTER COLUMN id SET DEFAULT nextval('static_content_id_seq'::regclass);
 A   ALTER TABLE public.static_contents ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    201    202    202            �
           2604    16479    users id    DEFAULT     V   ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    198    199    199                      0    16468 
   migrations 
   TABLE DATA               3   COPY migrations (id, migration, batch) FROM stdin;
    public       postgres    false    197   �       
          0    16487    password_resets 
   TABLE DATA               <   COPY password_resets (email, token, created_at) FROM stdin;
    public       postgres    false    200   )                 0    16496    static_contents 
   TABLE DATA               N   COPY static_contents (id, title, content, created_at, updated_at) FROM stdin;
    public       postgres    false    202   F       	          0    16476    users 
   TABLE DATA               [   COPY users (id, name, email, password, remember_token, created_at, updated_at) FROM stdin;
    public       postgres    false    199   �                  0    0    migrations_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('migrations_id_seq', 3, true);
            public       postgres    false    196                       0    0    static_content_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('static_content_id_seq', 1, true);
            public       postgres    false    201                       0    0    users_id_seq    SEQUENCE SET     4   SELECT pg_catalog.setval('users_id_seq', 1, false);
            public       postgres    false    198               a   x�U�K
�0Eѱ]�4�݋�5AT����3Q��\��S y�?!I&�U���0KE���~pK��ZFQ�wio��cjɦ��.&�]���s'd6'�      
      x������ � �         4   x�3����M�I-.I�K�WH��K�8���U�WHJ�K���"�=... ��j      	      x������ � �     