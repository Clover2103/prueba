PGDMP              	        |            trabajo    16.3    16.3     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16398    trabajo    DATABASE     }   CREATE DATABASE trabajo WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Colombia.1252';
    DROP DATABASE trabajo;
                postgres    false            �            1259    16400 	   empleados    TABLE     �   CREATE TABLE public.empleados (
    id integer NOT NULL,
    nombre character varying(255) NOT NULL,
    puesto character varying(255) NOT NULL
);
    DROP TABLE public.empleados;
       public         heap    postgres    false            �            1259    16399    empleados_id_seq    SEQUENCE     �   CREATE SEQUENCE public.empleados_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.empleados_id_seq;
       public          postgres    false    216            �           0    0    empleados_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.empleados_id_seq OWNED BY public.empleados.id;
          public          postgres    false    215                       2604    16403    empleados id    DEFAULT     l   ALTER TABLE ONLY public.empleados ALTER COLUMN id SET DEFAULT nextval('public.empleados_id_seq'::regclass);
 ;   ALTER TABLE public.empleados ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215    216            �          0    16400 	   empleados 
   TABLE DATA           7   COPY public.empleados (id, nombre, puesto) FROM stdin;
    public          postgres    false    216   �
       �           0    0    empleados_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.empleados_id_seq', 9, true);
          public          postgres    false    215                       2606    16407    empleados empleados_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.empleados
    ADD CONSTRAINT empleados_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.empleados DROP CONSTRAINT empleados_pkey;
       public            postgres    false    216            �   �   x�e�MN1���)|�h�]N[���0,ټf�6b�H�̆;����ς��R^��W4�d���4��ܶh��`�/�|�$�}�!�-�.���~3U	�_@�s�d��>�1����g/��ԐB,!��"������-�r@���5H]��=�s(�;`�t��>45|O.ݩ����me�{?�a�/�y������/���Tn�     