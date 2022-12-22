PGDMP     1                    z            laravel_household    15.1    15.1 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16578    laravel_household    DATABASE     �   CREATE DATABASE laravel_household WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United States.1252';
 !   DROP DATABASE laravel_household;
                postgres    false            �            1259    16579    city    TABLE       CREATE TABLE public.city (
    city_id integer NOT NULL,
    city_name_en character varying(100),
    city_name_sw character varying(100),
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer
);
    DROP TABLE public.city;
       public         heap    postgres    false            �            1259    16664    city_city_id_seq    SEQUENCE     �   CREATE SEQUENCE public.city_city_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.city_city_id_seq;
       public          postgres    false    214            �           0    0    city_city_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.city_city_id_seq OWNED BY public.city.city_id;
          public          postgres    false    215            �            1259    16665    claim    TABLE     �  CREATE TABLE public.claim (
    claim_id integer NOT NULL,
    user_id integer NOT NULL,
    insurance_type_id integer NOT NULL,
    plan_id integer NOT NULL,
    product_id integer NOT NULL,
    policy_id integer NOT NULL,
    policy_number character varying(100),
    claim_number character varying(100),
    time_of_loss integer,
    date_of_loss integer,
    affected_items text,
    reported_to_police boolean,
    reported_documents text,
    description text,
    location_coordinates character varying(100),
    insured_property_documents text,
    additional_info text,
    intimation_date integer,
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer
);
    DROP TABLE public.claim;
       public         heap    postgres    false            �            1259    16670    claim_claim_id_seq    SEQUENCE     �   CREATE SEQUENCE public.claim_claim_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.claim_claim_id_seq;
       public          postgres    false    216            �           0    0    claim_claim_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.claim_claim_id_seq OWNED BY public.claim.claim_id;
          public          postgres    false    217            �            1259    16671    document    TABLE     <  CREATE TABLE public.document (
    document_id integer NOT NULL,
    user_id integer NOT NULL,
    claim_id integer NOT NULL,
    document_name character varying(255),
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer
);
    DROP TABLE public.document;
       public         heap    postgres    false            �            1259    16674    document_document_id_seq    SEQUENCE     �   CREATE SEQUENCE public.document_document_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.document_document_id_seq;
       public          postgres    false    218            �           0    0    document_document_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.document_document_id_seq OWNED BY public.document.document_id;
          public          postgres    false    219            �            1259    16675    insurance_coverage    TABLE     �  CREATE TABLE public.insurance_coverage (
    coverage_id integer NOT NULL,
    insurance_type_id integer NOT NULL,
    plan_id integer NOT NULL,
    product_id integer NOT NULL,
    coverage_heading_en text,
    coverage_data_en text,
    coverage_heading_sw text,
    coverage_data_sw text,
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer
);
 &   DROP TABLE public.insurance_coverage;
       public         heap    postgres    false            �            1259    16680 "   insurance_coverage_coverage_id_seq    SEQUENCE     �   CREATE SEQUENCE public.insurance_coverage_coverage_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.insurance_coverage_coverage_id_seq;
       public          postgres    false    220            �           0    0 "   insurance_coverage_coverage_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.insurance_coverage_coverage_id_seq OWNED BY public.insurance_coverage.coverage_id;
          public          postgres    false    221            �            1259    16681    insurance_type    TABLE     E  CREATE TABLE public.insurance_type (
    insurance_type_id integer NOT NULL,
    insurance_type_name_en character varying(50),
    insurance_type_name_sw character varying(50),
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer
);
 "   DROP TABLE public.insurance_type;
       public         heap    postgres    false            �            1259    16684 $   insurance_type_insurance_type_id_seq    SEQUENCE     �   CREATE SEQUENCE public.insurance_type_insurance_type_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ;   DROP SEQUENCE public.insurance_type_insurance_type_id_seq;
       public          postgres    false    222            �           0    0 $   insurance_type_insurance_type_id_seq    SEQUENCE OWNED BY     m   ALTER SEQUENCE public.insurance_type_insurance_type_id_seq OWNED BY public.insurance_type.insurance_type_id;
          public          postgres    false    223            �            1259    16685    plan    TABLE     E  CREATE TABLE public.plan (
    plan_id integer NOT NULL,
    insurance_type_id integer NOT NULL,
    plan_name_en character varying(50),
    plan_name_sw character varying(50),
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer
);
    DROP TABLE public.plan;
       public         heap    postgres    false            �            1259    16688    plan_plan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.plan_plan_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.plan_plan_id_seq;
       public          postgres    false    224            �           0    0    plan_plan_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.plan_plan_id_seq OWNED BY public.plan.plan_id;
          public          postgres    false    225            �            1259    16689    policy    TABLE     �  CREATE TABLE public.policy (
    policy_id integer NOT NULL,
    user_id integer NOT NULL,
    insurance_type_id integer NOT NULL,
    plan_id integer NOT NULL,
    product_id integer NOT NULL,
    proposal_id integer NOT NULL,
    policy_number character varying(100),
    start_date integer,
    end_date integer,
    transaction_date integer,
    transaction_id character varying(100),
    certificate_number character varying(100),
    policy_status character varying(50),
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer,
    created_by integer,
    language character varying
);
    DROP TABLE public.policy;
       public         heap    postgres    false            �            1259    16692    policy_policy_id_seq    SEQUENCE     �   CREATE SEQUENCE public.policy_policy_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.policy_policy_id_seq;
       public          postgres    false    226            �           0    0    policy_policy_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.policy_policy_id_seq OWNED BY public.policy.policy_id;
          public          postgres    false    227            �            1259    16693    product    TABLE     �  CREATE TABLE public.product (
    product_id integer NOT NULL,
    insurance_type_id integer,
    plan_id integer,
    product_name_en character varying(50),
    product_name_sw character varying(50),
    premium_without_vat numeric(15,2),
    vat_percentage numeric(6,2),
    vat_amount numeric(15,2),
    gross_premium numeric(15,2),
    building_compensation numeric(15,3),
    content_compensation numeric(15,3),
    currency character varying(10) DEFAULT 'TZS'::character varying,
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer,
    region_id integer
);
    DROP TABLE public.product;
       public         heap    postgres    false            �            1259    16697    product_product_id_seq    SEQUENCE     �   CREATE SEQUENCE public.product_product_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.product_product_id_seq;
       public          postgres    false    228            �           0    0    product_product_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.product_product_id_seq OWNED BY public.product.product_id;
          public          postgres    false    229            �            1259    16698    proposal    TABLE       CREATE TABLE public.proposal (
    proposal_id integer NOT NULL,
    quote_id integer NOT NULL,
    activity_id integer NOT NULL,
    insurance_type_id integer NOT NULL,
    user_id integer NOT NULL,
    plan_id integer NOT NULL,
    product_id integer NOT NULL,
    language character varying(3),
    proposal_request text,
    proposal_response text,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer,
    created_by integer,
    region_id integer
);
    DROP TABLE public.proposal;
       public         heap    postgres    false            �            1259    16703    proposal_proposal_id_seq    SEQUENCE     �   CREATE SEQUENCE public.proposal_proposal_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.proposal_proposal_id_seq;
       public          postgres    false    230            �           0    0    proposal_proposal_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.proposal_proposal_id_seq OWNED BY public.proposal.proposal_id;
          public          postgres    false    231            �            1259    16704    quote    TABLE     �  CREATE TABLE public.quote (
    quote_id integer NOT NULL,
    activity_id integer NOT NULL,
    user_id integer NOT NULL,
    insurance_type_id integer NOT NULL,
    plan_id integer NOT NULL,
    quote_request text,
    quote_response text,
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer,
    region_id integer
);
    DROP TABLE public.quote;
       public         heap    postgres    false            �            1259    16709    quote_quote_id_seq    SEQUENCE     �   CREATE SEQUENCE public.quote_quote_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.quote_quote_id_seq;
       public          postgres    false    232            �           0    0    quote_quote_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.quote_quote_id_seq OWNED BY public.quote.quote_id;
          public          postgres    false    233            �            1259    17287    region    TABLE     %  CREATE TABLE public.region (
    region_id integer NOT NULL,
    region_name_en character varying(50),
    region_name_sw character varying(50),
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer
);
    DROP TABLE public.region;
       public         heap    postgres    false            �            1259    17293    region_region_id_seq    SEQUENCE     �   ALTER TABLE public.region ALTER COLUMN region_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.region_region_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    243            �            1259    17282    selected_quote    TABLE     �  CREATE TABLE public.selected_quote (
    selected_quote_id integer NOT NULL,
    user_id integer,
    language character varying(3),
    quote_id integer,
    activity_id integer,
    quote_no integer,
    insurance_type_id integer,
    plan_id integer,
    product_id integer,
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer
);
 "   DROP TABLE public.selected_quote;
       public         heap    postgres    false            �            1259    17294 $   selected_quote_selected_quote_id_seq    SEQUENCE     �   ALTER TABLE public.selected_quote ALTER COLUMN selected_quote_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.selected_quote_selected_quote_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    242            �            1259    16710    temp_document    TABLE     G  CREATE TABLE public.temp_document (
    temp_document_id integer NOT NULL,
    user_id integer NOT NULL,
    policy_id integer NOT NULL,
    document_name character varying(255),
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer
);
 !   DROP TABLE public.temp_document;
       public         heap    postgres    false            �            1259    16713 "   temp_document_temp_document_id_seq    SEQUENCE     �   CREATE SEQUENCE public.temp_document_temp_document_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.temp_document_temp_document_id_seq;
       public          postgres    false    234            �           0    0 "   temp_document_temp_document_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.temp_document_temp_document_id_seq OWNED BY public.temp_document.temp_document_id;
          public          postgres    false    235            �            1259    16714    term_and_condition    TABLE     p  CREATE TABLE public.term_and_condition (
    term_id integer NOT NULL,
    insurance_type_id integer NOT NULL,
    plan_id integer NOT NULL,
    product_id integer NOT NULL,
    term_name_en text,
    term_name_sw text,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer,
    created_by integer
);
 &   DROP TABLE public.term_and_condition;
       public         heap    postgres    false            �            1259    16719    term_and_condition_term_id_seq    SEQUENCE     �   CREATE SEQUENCE public.term_and_condition_term_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.term_and_condition_term_id_seq;
       public          postgres    false    236            �           0    0    term_and_condition_term_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.term_and_condition_term_id_seq OWNED BY public.term_and_condition.term_id;
          public          postgres    false    237            �            1259    16720    transaction    TABLE     �  CREATE TABLE public.transaction (
    transaction_id integer NOT NULL,
    user_id integer NOT NULL,
    insurance_type_id integer NOT NULL,
    proposal_id integer NOT NULL,
    payment_id character varying,
    premium numeric(15,2),
    payment_mode character varying(100),
    payment_status character varying(100),
    language character varying(3),
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer,
    created_by integer
);
    DROP TABLE public.transaction;
       public         heap    postgres    false            �            1259    16725    transaction_transaction_id_seq    SEQUENCE     �   CREATE SEQUENCE public.transaction_transaction_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.transaction_transaction_id_seq;
       public          postgres    false    238            �           0    0    transaction_transaction_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.transaction_transaction_id_seq OWNED BY public.transaction.transaction_id;
          public          postgres    false    239            �            1259    16726    user_profile    TABLE     '  CREATE TABLE public.user_profile (
    user_profile_id integer NOT NULL,
    user_id integer NOT NULL,
    user_name character varying(100),
    user_email_id character varying(100),
    user_mobile_number character varying(13),
    address character varying(255),
    city character varying(100),
    region character varying(100),
    country character varying(100),
    pincode character varying(6),
    created_by integer,
    created_at integer,
    modified_by integer,
    modified_at integer,
    deleted_at integer,
    deleted_by integer
);
     DROP TABLE public.user_profile;
       public         heap    postgres    false            �            1259    16731     user_profile_user_profile_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_profile_user_profile_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.user_profile_user_profile_id_seq;
       public          postgres    false    240            �           0    0     user_profile_user_profile_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.user_profile_user_profile_id_seq OWNED BY public.user_profile.user_profile_id;
          public          postgres    false    241            �           2604    16732    city city_id    DEFAULT     l   ALTER TABLE ONLY public.city ALTER COLUMN city_id SET DEFAULT nextval('public.city_city_id_seq'::regclass);
 ;   ALTER TABLE public.city ALTER COLUMN city_id DROP DEFAULT;
       public          postgres    false    215    214            �           2604    16733    claim claim_id    DEFAULT     p   ALTER TABLE ONLY public.claim ALTER COLUMN claim_id SET DEFAULT nextval('public.claim_claim_id_seq'::regclass);
 =   ALTER TABLE public.claim ALTER COLUMN claim_id DROP DEFAULT;
       public          postgres    false    217    216            �           2604    16734    document document_id    DEFAULT     |   ALTER TABLE ONLY public.document ALTER COLUMN document_id SET DEFAULT nextval('public.document_document_id_seq'::regclass);
 C   ALTER TABLE public.document ALTER COLUMN document_id DROP DEFAULT;
       public          postgres    false    219    218            �           2604    16735    insurance_coverage coverage_id    DEFAULT     �   ALTER TABLE ONLY public.insurance_coverage ALTER COLUMN coverage_id SET DEFAULT nextval('public.insurance_coverage_coverage_id_seq'::regclass);
 M   ALTER TABLE public.insurance_coverage ALTER COLUMN coverage_id DROP DEFAULT;
       public          postgres    false    221    220            �           2604    16736     insurance_type insurance_type_id    DEFAULT     �   ALTER TABLE ONLY public.insurance_type ALTER COLUMN insurance_type_id SET DEFAULT nextval('public.insurance_type_insurance_type_id_seq'::regclass);
 O   ALTER TABLE public.insurance_type ALTER COLUMN insurance_type_id DROP DEFAULT;
       public          postgres    false    223    222            �           2604    16737    plan plan_id    DEFAULT     l   ALTER TABLE ONLY public.plan ALTER COLUMN plan_id SET DEFAULT nextval('public.plan_plan_id_seq'::regclass);
 ;   ALTER TABLE public.plan ALTER COLUMN plan_id DROP DEFAULT;
       public          postgres    false    225    224            �           2604    16738    policy policy_id    DEFAULT     t   ALTER TABLE ONLY public.policy ALTER COLUMN policy_id SET DEFAULT nextval('public.policy_policy_id_seq'::regclass);
 ?   ALTER TABLE public.policy ALTER COLUMN policy_id DROP DEFAULT;
       public          postgres    false    227    226            �           2604    16739    product product_id    DEFAULT     x   ALTER TABLE ONLY public.product ALTER COLUMN product_id SET DEFAULT nextval('public.product_product_id_seq'::regclass);
 A   ALTER TABLE public.product ALTER COLUMN product_id DROP DEFAULT;
       public          postgres    false    229    228            �           2604    16740    proposal proposal_id    DEFAULT     |   ALTER TABLE ONLY public.proposal ALTER COLUMN proposal_id SET DEFAULT nextval('public.proposal_proposal_id_seq'::regclass);
 C   ALTER TABLE public.proposal ALTER COLUMN proposal_id DROP DEFAULT;
       public          postgres    false    231    230            �           2604    16741    quote quote_id    DEFAULT     p   ALTER TABLE ONLY public.quote ALTER COLUMN quote_id SET DEFAULT nextval('public.quote_quote_id_seq'::regclass);
 =   ALTER TABLE public.quote ALTER COLUMN quote_id DROP DEFAULT;
       public          postgres    false    233    232            �           2604    16742    temp_document temp_document_id    DEFAULT     �   ALTER TABLE ONLY public.temp_document ALTER COLUMN temp_document_id SET DEFAULT nextval('public.temp_document_temp_document_id_seq'::regclass);
 M   ALTER TABLE public.temp_document ALTER COLUMN temp_document_id DROP DEFAULT;
       public          postgres    false    235    234            �           2604    16743    term_and_condition term_id    DEFAULT     �   ALTER TABLE ONLY public.term_and_condition ALTER COLUMN term_id SET DEFAULT nextval('public.term_and_condition_term_id_seq'::regclass);
 I   ALTER TABLE public.term_and_condition ALTER COLUMN term_id DROP DEFAULT;
       public          postgres    false    237    236            �           2604    16744    transaction transaction_id    DEFAULT     �   ALTER TABLE ONLY public.transaction ALTER COLUMN transaction_id SET DEFAULT nextval('public.transaction_transaction_id_seq'::regclass);
 I   ALTER TABLE public.transaction ALTER COLUMN transaction_id DROP DEFAULT;
       public          postgres    false    239    238            �           2604    17038    user_profile user_id    DEFAULT     �   ALTER TABLE ONLY public.user_profile ALTER COLUMN user_id SET DEFAULT nextval('public.user_profile_user_profile_id_seq'::regclass);
 C   ALTER TABLE public.user_profile ALTER COLUMN user_id DROP DEFAULT;
       public          postgres    false    241    240            �          0    16579    city 
   TABLE DATA           �   COPY public.city (city_id, city_name_en, city_name_sw, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by) FROM stdin;
    public          postgres    false    214   ��       �          0    16665    claim 
   TABLE DATA           �  COPY public.claim (claim_id, user_id, insurance_type_id, plan_id, product_id, policy_id, policy_number, claim_number, time_of_loss, date_of_loss, affected_items, reported_to_police, reported_documents, description, location_coordinates, insured_property_documents, additional_info, intimation_date, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by) FROM stdin;
    public          postgres    false    216   ��       �          0    16671    document 
   TABLE DATA           �   COPY public.document (document_id, user_id, claim_id, document_name, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by) FROM stdin;
    public          postgres    false    218   ��       �          0    16675    insurance_coverage 
   TABLE DATA           �   COPY public.insurance_coverage (coverage_id, insurance_type_id, plan_id, product_id, coverage_heading_en, coverage_data_en, coverage_heading_sw, coverage_data_sw, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by) FROM stdin;
    public          postgres    false    220   ��       �          0    16681    insurance_type 
   TABLE DATA           �   COPY public.insurance_type (insurance_type_id, insurance_type_name_en, insurance_type_name_sw, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by) FROM stdin;
    public          postgres    false    222   ��       �          0    16685    plan 
   TABLE DATA           �   COPY public.plan (plan_id, insurance_type_id, plan_name_en, plan_name_sw, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by) FROM stdin;
    public          postgres    false    224   1�       �          0    16689    policy 
   TABLE DATA           '  COPY public.policy (policy_id, user_id, insurance_type_id, plan_id, product_id, proposal_id, policy_number, start_date, end_date, transaction_date, transaction_id, certificate_number, policy_status, created_at, modified_by, modified_at, deleted_at, deleted_by, created_by, language) FROM stdin;
    public          postgres    false    226   ��       �          0    16693    product 
   TABLE DATA           7  COPY public.product (product_id, insurance_type_id, plan_id, product_name_en, product_name_sw, premium_without_vat, vat_percentage, vat_amount, gross_premium, building_compensation, content_compensation, currency, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by, region_id) FROM stdin;
    public          postgres    false    228   ��       �          0    16698    proposal 
   TABLE DATA           �   COPY public.proposal (proposal_id, quote_id, activity_id, insurance_type_id, user_id, plan_id, product_id, language, proposal_request, proposal_response, created_at, modified_by, modified_at, deleted_at, deleted_by, created_by, region_id) FROM stdin;
    public          postgres    false    230   '�       �          0    16704    quote 
   TABLE DATA           �   COPY public.quote (quote_id, activity_id, user_id, insurance_type_id, plan_id, quote_request, quote_response, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by, region_id) FROM stdin;
    public          postgres    false    232   D�       �          0    17287    region 
   TABLE DATA           �   COPY public.region (region_id, region_name_en, region_name_sw, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by) FROM stdin;
    public          postgres    false    243   ~�       �          0    17282    selected_quote 
   TABLE DATA           �   COPY public.selected_quote (selected_quote_id, user_id, language, quote_id, activity_id, quote_no, insurance_type_id, plan_id, product_id, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by) FROM stdin;
    public          postgres    false    242   ��       �          0    16710    temp_document 
   TABLE DATA           �   COPY public.temp_document (temp_document_id, user_id, policy_id, document_name, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by) FROM stdin;
    public          postgres    false    234   ��       �          0    16714    term_and_condition 
   TABLE DATA           �   COPY public.term_and_condition (term_id, insurance_type_id, plan_id, product_id, term_name_en, term_name_sw, created_at, modified_by, modified_at, deleted_at, deleted_by, created_by) FROM stdin;
    public          postgres    false    236   ��       �          0    16720    transaction 
   TABLE DATA           �   COPY public.transaction (transaction_id, user_id, insurance_type_id, proposal_id, payment_id, premium, payment_mode, payment_status, language, created_at, modified_by, modified_at, deleted_at, deleted_by, created_by) FROM stdin;
    public          postgres    false    238   ��       �          0    16726    user_profile 
   TABLE DATA           �   COPY public.user_profile (user_profile_id, user_id, user_name, user_email_id, user_mobile_number, address, city, region, country, pincode, created_by, created_at, modified_by, modified_at, deleted_at, deleted_by) FROM stdin;
    public          postgres    false    240   �       �           0    0    city_city_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.city_city_id_seq', 80, true);
          public          postgres    false    215            �           0    0    claim_claim_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.claim_claim_id_seq', 1, false);
          public          postgres    false    217            �           0    0    document_document_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.document_document_id_seq', 1, false);
          public          postgres    false    219            �           0    0 "   insurance_coverage_coverage_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.insurance_coverage_coverage_id_seq', 4, true);
          public          postgres    false    221            �           0    0 $   insurance_type_insurance_type_id_seq    SEQUENCE SET     R   SELECT pg_catalog.setval('public.insurance_type_insurance_type_id_seq', 2, true);
          public          postgres    false    223            �           0    0    plan_plan_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.plan_plan_id_seq', 4, true);
          public          postgres    false    225            �           0    0    policy_policy_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.policy_policy_id_seq', 1, false);
          public          postgres    false    227            �           0    0    product_product_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.product_product_id_seq', 2, true);
          public          postgres    false    229            �           0    0    proposal_proposal_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.proposal_proposal_id_seq', 1, false);
          public          postgres    false    231            �           0    0    quote_quote_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.quote_quote_id_seq', 6, true);
          public          postgres    false    233            �           0    0    region_region_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.region_region_id_seq', 1, false);
          public          postgres    false    244            �           0    0 $   selected_quote_selected_quote_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.selected_quote_selected_quote_id_seq', 1, false);
          public          postgres    false    245            �           0    0 "   temp_document_temp_document_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.temp_document_temp_document_id_seq', 1, false);
          public          postgres    false    235            �           0    0    term_and_condition_term_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.term_and_condition_term_id_seq', 1, false);
          public          postgres    false    237            �           0    0    transaction_transaction_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.transaction_transaction_id_seq', 1, false);
          public          postgres    false    239            �           0    0     user_profile_user_profile_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.user_profile_user_profile_id_seq', 4, true);
          public          postgres    false    241            �           2606    16748    city city_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY public.city
    ADD CONSTRAINT city_pkey PRIMARY KEY (city_id);
 8   ALTER TABLE ONLY public.city DROP CONSTRAINT city_pkey;
       public            postgres    false    214            �           2606    16750    claim claim_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.claim
    ADD CONSTRAINT claim_pkey PRIMARY KEY (claim_id);
 :   ALTER TABLE ONLY public.claim DROP CONSTRAINT claim_pkey;
       public            postgres    false    216            �           2606    16752    document document_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.document
    ADD CONSTRAINT document_pkey PRIMARY KEY (document_id);
 @   ALTER TABLE ONLY public.document DROP CONSTRAINT document_pkey;
       public            postgres    false    218            �           2606    16754 *   insurance_coverage insurance_coverage_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.insurance_coverage
    ADD CONSTRAINT insurance_coverage_pkey PRIMARY KEY (coverage_id);
 T   ALTER TABLE ONLY public.insurance_coverage DROP CONSTRAINT insurance_coverage_pkey;
       public            postgres    false    220            �           2606    16756 "   insurance_type insurance_type_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.insurance_type
    ADD CONSTRAINT insurance_type_pkey PRIMARY KEY (insurance_type_id);
 L   ALTER TABLE ONLY public.insurance_type DROP CONSTRAINT insurance_type_pkey;
       public            postgres    false    222            �           2606    16758    plan plan_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY public.plan
    ADD CONSTRAINT plan_pkey PRIMARY KEY (plan_id);
 8   ALTER TABLE ONLY public.plan DROP CONSTRAINT plan_pkey;
       public            postgres    false    224            �           2606    16760    policy policy_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.policy
    ADD CONSTRAINT policy_pkey PRIMARY KEY (policy_id);
 <   ALTER TABLE ONLY public.policy DROP CONSTRAINT policy_pkey;
       public            postgres    false    226            �           2606    16762    product product_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.product
    ADD CONSTRAINT product_pkey PRIMARY KEY (product_id);
 >   ALTER TABLE ONLY public.product DROP CONSTRAINT product_pkey;
       public            postgres    false    228            �           2606    16764    proposal proposal_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.proposal
    ADD CONSTRAINT proposal_pkey PRIMARY KEY (proposal_id);
 @   ALTER TABLE ONLY public.proposal DROP CONSTRAINT proposal_pkey;
       public            postgres    false    230            �           2606    16766    quote quote_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.quote
    ADD CONSTRAINT quote_pkey PRIMARY KEY (quote_id);
 :   ALTER TABLE ONLY public.quote DROP CONSTRAINT quote_pkey;
       public            postgres    false    232            �           2606    17291    region region_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.region
    ADD CONSTRAINT region_pkey PRIMARY KEY (region_id);
 <   ALTER TABLE ONLY public.region DROP CONSTRAINT region_pkey;
       public            postgres    false    243            �           2606    17286 "   selected_quote selected_quote_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.selected_quote
    ADD CONSTRAINT selected_quote_pkey PRIMARY KEY (selected_quote_id);
 L   ALTER TABLE ONLY public.selected_quote DROP CONSTRAINT selected_quote_pkey;
       public            postgres    false    242            �           2606    16768     temp_document temp_document_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.temp_document
    ADD CONSTRAINT temp_document_pkey PRIMARY KEY (temp_document_id);
 J   ALTER TABLE ONLY public.temp_document DROP CONSTRAINT temp_document_pkey;
       public            postgres    false    234            �           2606    16770 *   term_and_condition term_and_condition_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.term_and_condition
    ADD CONSTRAINT term_and_condition_pkey PRIMARY KEY (term_id);
 T   ALTER TABLE ONLY public.term_and_condition DROP CONSTRAINT term_and_condition_pkey;
       public            postgres    false    236            �           2606    16772    transaction transaction_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.transaction
    ADD CONSTRAINT transaction_pkey PRIMARY KEY (transaction_id);
 F   ALTER TABLE ONLY public.transaction DROP CONSTRAINT transaction_pkey;
       public            postgres    false    238            �           2606    16774    user_profile user_profile_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public.user_profile
    ADD CONSTRAINT user_profile_pkey PRIMARY KEY (user_id);
 H   ALTER TABLE ONLY public.user_profile DROP CONSTRAINT user_profile_pkey;
       public            postgres    false    240            �           2606    16775    document fk_claim    FK CONSTRAINT     w   ALTER TABLE ONLY public.document
    ADD CONSTRAINT fk_claim FOREIGN KEY (claim_id) REFERENCES public.claim(claim_id);
 ;   ALTER TABLE ONLY public.document DROP CONSTRAINT fk_claim;
       public          postgres    false    3266    218    216            �           2606    16780    plan fk_insurance_type    FK CONSTRAINT     �   ALTER TABLE ONLY public.plan
    ADD CONSTRAINT fk_insurance_type FOREIGN KEY (insurance_type_id) REFERENCES public.insurance_type(insurance_type_id);
 @   ALTER TABLE ONLY public.plan DROP CONSTRAINT fk_insurance_type;
       public          postgres    false    224    3272    222            �           2606    16785    product fk_insurance_type    FK CONSTRAINT     �   ALTER TABLE ONLY public.product
    ADD CONSTRAINT fk_insurance_type FOREIGN KEY (insurance_type_id) REFERENCES public.insurance_type(insurance_type_id);
 C   ALTER TABLE ONLY public.product DROP CONSTRAINT fk_insurance_type;
       public          postgres    false    222    228    3272            �           2606    16790 $   insurance_coverage fk_insurance_type    FK CONSTRAINT     �   ALTER TABLE ONLY public.insurance_coverage
    ADD CONSTRAINT fk_insurance_type FOREIGN KEY (insurance_type_id) REFERENCES public.insurance_type(insurance_type_id);
 N   ALTER TABLE ONLY public.insurance_coverage DROP CONSTRAINT fk_insurance_type;
       public          postgres    false    3272    220    222            �           2606    16795    quote fk_insurance_type    FK CONSTRAINT     �   ALTER TABLE ONLY public.quote
    ADD CONSTRAINT fk_insurance_type FOREIGN KEY (insurance_type_id) REFERENCES public.insurance_type(insurance_type_id);
 A   ALTER TABLE ONLY public.quote DROP CONSTRAINT fk_insurance_type;
       public          postgres    false    3272    222    232            �           2606    16800    proposal fk_insurance_type    FK CONSTRAINT     �   ALTER TABLE ONLY public.proposal
    ADD CONSTRAINT fk_insurance_type FOREIGN KEY (insurance_type_id) REFERENCES public.insurance_type(insurance_type_id);
 D   ALTER TABLE ONLY public.proposal DROP CONSTRAINT fk_insurance_type;
       public          postgres    false    230    3272    222            �           2606    16805    transaction fk_insurance_type    FK CONSTRAINT     �   ALTER TABLE ONLY public.transaction
    ADD CONSTRAINT fk_insurance_type FOREIGN KEY (insurance_type_id) REFERENCES public.insurance_type(insurance_type_id);
 G   ALTER TABLE ONLY public.transaction DROP CONSTRAINT fk_insurance_type;
       public          postgres    false    238    3272    222            �           2606    16810 $   term_and_condition fk_insurance_type    FK CONSTRAINT     �   ALTER TABLE ONLY public.term_and_condition
    ADD CONSTRAINT fk_insurance_type FOREIGN KEY (insurance_type_id) REFERENCES public.insurance_type(insurance_type_id);
 N   ALTER TABLE ONLY public.term_and_condition DROP CONSTRAINT fk_insurance_type;
       public          postgres    false    236    3272    222            �           2606    16815    policy fk_insurance_type    FK CONSTRAINT     �   ALTER TABLE ONLY public.policy
    ADD CONSTRAINT fk_insurance_type FOREIGN KEY (insurance_type_id) REFERENCES public.insurance_type(insurance_type_id);
 B   ALTER TABLE ONLY public.policy DROP CONSTRAINT fk_insurance_type;
       public          postgres    false    226    3272    222            �           2606    16820    claim fk_insurance_type    FK CONSTRAINT     �   ALTER TABLE ONLY public.claim
    ADD CONSTRAINT fk_insurance_type FOREIGN KEY (insurance_type_id) REFERENCES public.insurance_type(insurance_type_id);
 A   ALTER TABLE ONLY public.claim DROP CONSTRAINT fk_insurance_type;
       public          postgres    false    222    3272    216            �           2606    16825    product fk_plan    FK CONSTRAINT     r   ALTER TABLE ONLY public.product
    ADD CONSTRAINT fk_plan FOREIGN KEY (plan_id) REFERENCES public.plan(plan_id);
 9   ALTER TABLE ONLY public.product DROP CONSTRAINT fk_plan;
       public          postgres    false    224    228    3274            �           2606    16830    insurance_coverage fk_plan    FK CONSTRAINT     }   ALTER TABLE ONLY public.insurance_coverage
    ADD CONSTRAINT fk_plan FOREIGN KEY (plan_id) REFERENCES public.plan(plan_id);
 D   ALTER TABLE ONLY public.insurance_coverage DROP CONSTRAINT fk_plan;
       public          postgres    false    220    3274    224            �           2606    16835    quote fk_plan    FK CONSTRAINT     p   ALTER TABLE ONLY public.quote
    ADD CONSTRAINT fk_plan FOREIGN KEY (plan_id) REFERENCES public.plan(plan_id);
 7   ALTER TABLE ONLY public.quote DROP CONSTRAINT fk_plan;
       public          postgres    false    232    3274    224            �           2606    16840    proposal fk_plan    FK CONSTRAINT     s   ALTER TABLE ONLY public.proposal
    ADD CONSTRAINT fk_plan FOREIGN KEY (plan_id) REFERENCES public.plan(plan_id);
 :   ALTER TABLE ONLY public.proposal DROP CONSTRAINT fk_plan;
       public          postgres    false    230    3274    224            �           2606    16845    term_and_condition fk_plan    FK CONSTRAINT     }   ALTER TABLE ONLY public.term_and_condition
    ADD CONSTRAINT fk_plan FOREIGN KEY (plan_id) REFERENCES public.plan(plan_id);
 D   ALTER TABLE ONLY public.term_and_condition DROP CONSTRAINT fk_plan;
       public          postgres    false    236    3274    224            �           2606    16850    policy fk_plan    FK CONSTRAINT     q   ALTER TABLE ONLY public.policy
    ADD CONSTRAINT fk_plan FOREIGN KEY (plan_id) REFERENCES public.plan(plan_id);
 8   ALTER TABLE ONLY public.policy DROP CONSTRAINT fk_plan;
       public          postgres    false    226    224    3274            �           2606    16855    claim fk_plan    FK CONSTRAINT     p   ALTER TABLE ONLY public.claim
    ADD CONSTRAINT fk_plan FOREIGN KEY (plan_id) REFERENCES public.plan(plan_id);
 7   ALTER TABLE ONLY public.claim DROP CONSTRAINT fk_plan;
       public          postgres    false    216    224    3274            �           2606    16860    temp_document fk_policy    FK CONSTRAINT     �   ALTER TABLE ONLY public.temp_document
    ADD CONSTRAINT fk_policy FOREIGN KEY (policy_id) REFERENCES public.policy(policy_id);
 A   ALTER TABLE ONLY public.temp_document DROP CONSTRAINT fk_policy;
       public          postgres    false    234    226    3276            �           2606    16865    claim fk_policy    FK CONSTRAINT     x   ALTER TABLE ONLY public.claim
    ADD CONSTRAINT fk_policy FOREIGN KEY (policy_id) REFERENCES public.policy(policy_id);
 9   ALTER TABLE ONLY public.claim DROP CONSTRAINT fk_policy;
       public          postgres    false    226    3276    216            �           2606    16870    insurance_coverage fk_product    FK CONSTRAINT     �   ALTER TABLE ONLY public.insurance_coverage
    ADD CONSTRAINT fk_product FOREIGN KEY (product_id) REFERENCES public.product(product_id);
 G   ALTER TABLE ONLY public.insurance_coverage DROP CONSTRAINT fk_product;
       public          postgres    false    220    228    3278            �           2606    16875    proposal fk_product    FK CONSTRAINT        ALTER TABLE ONLY public.proposal
    ADD CONSTRAINT fk_product FOREIGN KEY (product_id) REFERENCES public.product(product_id);
 =   ALTER TABLE ONLY public.proposal DROP CONSTRAINT fk_product;
       public          postgres    false    3278    228    230            �           2606    16880    term_and_condition fk_product    FK CONSTRAINT     �   ALTER TABLE ONLY public.term_and_condition
    ADD CONSTRAINT fk_product FOREIGN KEY (product_id) REFERENCES public.product(product_id);
 G   ALTER TABLE ONLY public.term_and_condition DROP CONSTRAINT fk_product;
       public          postgres    false    3278    228    236            �           2606    16885    policy fk_product    FK CONSTRAINT     }   ALTER TABLE ONLY public.policy
    ADD CONSTRAINT fk_product FOREIGN KEY (product_id) REFERENCES public.product(product_id);
 ;   ALTER TABLE ONLY public.policy DROP CONSTRAINT fk_product;
       public          postgres    false    226    3278    228            �           2606    16890    claim fk_product    FK CONSTRAINT     |   ALTER TABLE ONLY public.claim
    ADD CONSTRAINT fk_product FOREIGN KEY (product_id) REFERENCES public.product(product_id);
 :   ALTER TABLE ONLY public.claim DROP CONSTRAINT fk_product;
       public          postgres    false    216    3278    228            �           2606    16895    transaction fk_proposal    FK CONSTRAINT     �   ALTER TABLE ONLY public.transaction
    ADD CONSTRAINT fk_proposal FOREIGN KEY (proposal_id) REFERENCES public.proposal(proposal_id);
 A   ALTER TABLE ONLY public.transaction DROP CONSTRAINT fk_proposal;
       public          postgres    false    3280    230    238            �           2606    16900    policy fk_proposal    FK CONSTRAINT     �   ALTER TABLE ONLY public.policy
    ADD CONSTRAINT fk_proposal FOREIGN KEY (proposal_id) REFERENCES public.proposal(proposal_id);
 <   ALTER TABLE ONLY public.policy DROP CONSTRAINT fk_proposal;
       public          postgres    false    226    3280    230            �           2606    16905    proposal fk_quote    FK CONSTRAINT     w   ALTER TABLE ONLY public.proposal
    ADD CONSTRAINT fk_quote FOREIGN KEY (quote_id) REFERENCES public.quote(quote_id);
 ;   ALTER TABLE ONLY public.proposal DROP CONSTRAINT fk_quote;
       public          postgres    false    232    230    3282            �           2606    16910    quote fk_user_profile    FK CONSTRAINT     �   ALTER TABLE ONLY public.quote
    ADD CONSTRAINT fk_user_profile FOREIGN KEY (user_id) REFERENCES public.user_profile(user_id);
 ?   ALTER TABLE ONLY public.quote DROP CONSTRAINT fk_user_profile;
       public          postgres    false    232    240    3290            �           2606    16915    proposal fk_user_profile    FK CONSTRAINT     �   ALTER TABLE ONLY public.proposal
    ADD CONSTRAINT fk_user_profile FOREIGN KEY (user_id) REFERENCES public.user_profile(user_id);
 B   ALTER TABLE ONLY public.proposal DROP CONSTRAINT fk_user_profile;
       public          postgres    false    3290    230    240                        2606    16920    transaction fk_user_profile    FK CONSTRAINT     �   ALTER TABLE ONLY public.transaction
    ADD CONSTRAINT fk_user_profile FOREIGN KEY (user_id) REFERENCES public.user_profile(user_id);
 E   ALTER TABLE ONLY public.transaction DROP CONSTRAINT fk_user_profile;
       public          postgres    false    238    3290    240            �           2606    16925    policy fk_user_profile    FK CONSTRAINT     �   ALTER TABLE ONLY public.policy
    ADD CONSTRAINT fk_user_profile FOREIGN KEY (user_id) REFERENCES public.user_profile(user_id);
 @   ALTER TABLE ONLY public.policy DROP CONSTRAINT fk_user_profile;
       public          postgres    false    226    3290    240            �           2606    16930    temp_document fk_user_profile    FK CONSTRAINT     �   ALTER TABLE ONLY public.temp_document
    ADD CONSTRAINT fk_user_profile FOREIGN KEY (user_id) REFERENCES public.user_profile(user_id);
 G   ALTER TABLE ONLY public.temp_document DROP CONSTRAINT fk_user_profile;
       public          postgres    false    3290    234    240            �           2606    16935    claim fk_user_profile    FK CONSTRAINT     �   ALTER TABLE ONLY public.claim
    ADD CONSTRAINT fk_user_profile FOREIGN KEY (user_id) REFERENCES public.user_profile(user_id);
 ?   ALTER TABLE ONLY public.claim DROP CONSTRAINT fk_user_profile;
       public          postgres    false    3290    240    216            �           2606    16940    document fk_user_profile    FK CONSTRAINT     �   ALTER TABLE ONLY public.document
    ADD CONSTRAINT fk_user_profile FOREIGN KEY (user_id) REFERENCES public.user_profile(user_id);
 B   ALTER TABLE ONLY public.document DROP CONSTRAINT fk_user_profile;
       public          postgres    false    3290    240    218            �   �  x��X�r�8]��B�٥xC��<I2�If�f#l�U���dC���seҝU%wGǺ�s�u�]�Bi-�D�L9%�;¯�Ҳ�Y<K��S�����o6.�Z�'�%��V��We!���H�����&��Unw>Wl�|��W�B~r���i\�e��啑[��){TV˲�|�F� ��|�����H�o�E�fW�V��D�$���l�AX��Y�;ˤ�Hǟ�*���Ȇl�+����$� ��@�T�IW~r`����6IƦ�OEa_&Y�Ғ_^~r�y8��$��-��Ƣ:��_�6W��)�	9���{x�مۭ&�S�T���YWP�����թ��`�=)]�\��Kk6N��R�Yb�P��`�����'�+�H~���5�1]�̘��[��;��.�"E��Ț�;�ڭJ��
�F�0�B�܈�HUT8}�A-�C��Bt9�zsz���<_؍�0}��Nj�/��Z�f�
d��[ܟ#h�]���L��)Ke6���t�6
��ZՂ?X��e]��-�#/u��>#����|Js�uL�;-6v ���җlY�-Zmb7ʣj1mv��J\�JiV�m��qN-��T�;�+�N�;8��DXv����]^���2� K������q�DJ���#wDt����9�c�(@OR#�S���q֤6-[9��!��@Tҋ��KPJ��'���cLȚ�Z�����̐ڣ�JMR"<�ʒ�q��>]�$��<��Dl�|'Mjum�ue��_������We���C�р2�-��4�[���\W[�17��E�FL\�6�,�F�����6D멠P�(~��z��O��	�Y���҇�����e���p�Er��J�	�ɹ��豙C=���q��������>$w�J��2�Lp�����k��ʀ��Ѯ�䳂dC�LӅ���u��CC>��K9�a�3��B�FDA��<T��P5�=��J�Ikw��p�Y
�⋪�T�A�Е,��MEJ�ŦP���:��"UB� �E\n{m�:2?�D�8N�z�Q���O<�m�����f���ZK�Y�՚�֮T��.�bi�w(Qd 
�d���l�����Q�����B�`��V�ܹ�҄^� �#7d�a5d�,�!95.Hj��2f�nE�~/Ħ�N��u���|��!�	C��Ey�A��b@.f�e�@��ᡈjR��r�ߑ�Q�������`���b�  v��G��[/�/<AJ܁8�E8�-ʞ�����AC�Z��c<h=����|3	�^��a4�;N��N��1M4���Z�M������6�}#`ȧ;P}��J`�y%`�(0��.&x��J���y���9�@����t{�!�t`+������Q����F���C�	F9�eȐ=b�C�=��ٯU�JF��E��D�+7A܌(iũE\>O����E@D�D�,�9(��k�A����~Qgv	�l��lT��xq��=L�ٰ�*�lp�O�F��|Y5|V����B����C��O*x.������9�q��L��y���1`=6�Ҵ����"ATqC�#��n�ol�4vK_�Ȣ%��� ��g%н乢R4`�N���ʐ� yl�hJd�0�GE7lv-8�y�6����n���>`+]��PGMG��$��g���Aa��g;e��NW�U�u�/`%d3��i"��2lP����~-IGK�:�6�߀��x�6�+L�4�	�U����vi��|"�����U��nl��:�u�&ҘOcP���ʕ�&���2��� �����8=���&6>ItWf�X�Zy� W\�N�����D���TxlCy74�d���x���+�!h��8�ݩF�=
-MI��/R��њqP��m"�7"�)���e�8�)���7_������@� -��};֥4;�h��2����{3KǠ�;��������V      �      x������ � �      �      x������ � �      �     x����n�PEg�+�uCJ�R֢Hh(UZX����H��R����C�'[�=�:����n�/CM�z�l�s��m�zC���e0e��E�	�¾b�rS9(W��4���uW����c.M�r��\��%Kp���L����ϻfj~%�P�^u��^> �4g��k,��B�n/�[�v�0�j/ڵj��}���9�7�q����3nz�.�T��}I �ڛ6NM�|͊Ka��178k���rE���w,      �   7   x�3���/-N���IQpJ,�LF�+�s���!.#$eE������"ص��qqq �~$*      �   a   x�3�4�t��M��KM�u�/K-JLO�Q.��CC\F@�N��9)�y�
�y9��<욌�6敤�@� s�k1�4�(J��,�U��] ��=... +�C�      �      x������ � �      �   X   x�3�4�ܤ|��iij``�g`�ih"�<d����C�]8c�0���̴ĢR(���"#(���0G2ۈ{b���� p�+�      �      x������ � �      �   *  x��TMo�0=ï�r�BIz�8,���=-U4Mf�j⤎M��}'_���C��8b^fތ��c5,�g������vcep�j	�GO-�x`\��2�Da�d���;�3�Qe��L��Da��|�\-�פ�<��~ֱBO��T��N둄]Ѳh�h�%j�h�}Ƿ��\���Q�cM��~ߖ�f忦]�=�9�Ԕ�̤�d�Y�ԝ�|�ԝ��IM2֬Bjg��0@(�I��u���[����F��F�,g�Z�e�q�}����_�f��e�w=��[cmU�b�uD1��i�mӤ�G�À����Q�"E�g��Ň�27?
����qZ���>9;���2z�� /@<L�m�/�r����E$�;-`?��Ƃ�F[�CP���6��ӹv�(r�9���9�@!�0D��$��[�}ꑱ~ȸ��b��r����G���w_z����_��u��\����Vh��=�m���������-Ē��|��=�ʯQ
������>q6>��!�M�y��'��O�/��r���P�����YŤ�����_K��D      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �   
  x�e��N�@���S��(���Lcb��1ᲅ�l�Κ�E�ۋ�A���?�7)�ଧ�r��;�1���w��Ο�b�N�n�,�k�<X�cTЖ��t ,�E�o�L7�n ȭ�P�y)֙(r�hƝ�_�Y�^��HK�+/��6��l�`.�O���ރ���Ti��2/n���r?TOF��%>:5�9t��박2��>q�ũnl�A��O�;kx��5&�(7�$[����(M��|�fX.���/Z�'d&ni��Q� k�n�     