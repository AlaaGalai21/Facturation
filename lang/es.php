<?php
//module es.php
//traduit par Eduardo Redondo 
//traduit du module fr
//
//dernière modification le 29.05.2005
//
//
//
//
//
//Liste des touches d'accès rapide
//A : Anular 
//A : Anular              !!!!!!!!!!!!!!!!
//A : Presentar en pantalla              !!!!!!!!!!!!!!!!
//C : Cifra de negocios 
//D : Destrucción del expediente/cliente 
//F : Buscar el cliente 
//G : Configuración 
//H : AYUDA 
//I : Imprimir 
//J : Libro contable 
//L : Listado de direcciones 
//M : Modificar el expediente/cliente 
//M : Modificar              !!!!!!!!!!!!!!!!
//N : no 
//O : Nuevo expediente/cliente 
//O : sí              !!!!!!!!!!!!!!!!
//R : Buscar une expediente/cliente 
//S : Listado de saldos 
//T : Reconectarse 
//u : Vuelta al expediente/cliente 
//
//
//
//Liste des variables

$langchoisie["adresses_index_h2"]="Para buscar una dirección, utiliza el campo siguiente";
$langchoisie["adresses_index_nom"]="Cliente que deseas buscar";
$langchoisie["adresses_index_rechercher"]="Buscar";
$langchoisie["adresses_index_title"]="Búsqueda de dirección";
$langchoisie["adresses_insermodif_h2"]="Modificación insertada";
$langchoisie["adresses_insermodif_title"]="Confirmación de inserción";
$langchoisie["adresses_modifier_adresse"]="Dirección";
$langchoisie["adresses_modifier_annuler"]="Anular";
$langchoisie["adresses_modifier_annuler_accesskey"]="A";
$langchoisie["adresses_modifier_ccp"]="Cuenta bancaria";
$langchoisie["adresses_modifier_cp"]="Apartado";
$langchoisie["adresses_modifier_fax"]="Fax";
$langchoisie["adresses_modifier_fonction"]="Cargo";
$langchoisie["adresses_modifier_h2"]="Ficha n°";
$langchoisie["adresses_modifier_mail"]="Correo electrónico";
$langchoisie["adresses_modifier_modifie_par"]="Modificado por";
$langchoisie["adresses_modifier_modifier"]="Modificar";
$langchoisie["adresses_modifier_natel"]="Telefono móvil";
$langchoisie["adresses_modifier_nom"]="Apellido";
$langchoisie["adresses_modifier_note_par"]="Anotado por";
$langchoisie["adresses_modifier_pays"]="País";
$langchoisie["adresses_modifier_prenom"]="Nombre";
$langchoisie["adresses_modifier_remarques"]="Comentario";
$langchoisie["adresses_modifier_salut"]="Saludo";
$langchoisie["adresses_modifier_tel"]="Telefono";
$langchoisie["adresses_modifier_title"]="Ficha n° {$lang_utilisateur["id"]}";
$langchoisie["adresses_modifier_titre"]="Título";
$langchoisie["adresses_modifier_type"]="Tipo";
$langchoisie["adresses_modifier_ville"]="Ciudad";
$langchoisie["adresses_modifier_zip"]="Código postal";
$langchoisie["adresses_resultat_consulter"]="Consultar / modificar";
$langchoisie["adresses_resultat_h2"]=" Resultado de la búsqueda ";
$langchoisie["adresses_resultat_h3"]="Para buscar una dirección, utiliza el campo siguiente";
$langchoisie["adresses_resultat_nom"]="Cliente que deseas buscar";
$langchoisie["adresses_resultat_nouvelle_fiche"]="Crear un nuevo cliente";
$langchoisie["adresses_resultat_rechercher"]="Buscar el cliente";
$langchoisie["adresses_resultat_rechercher_accesskey"]="F";
$langchoisie["adresses_resultat_resultat"]="resultados encontrados";
$langchoisie["adresses_resultat_supprimer"]="Suprimir";
$langchoisie["adresses_resultat_title"]="Resultado de la búsqueda";
$langchoisie["adresses_supprimer_confirm_annuler"]="Anular";
$langchoisie["adresses_supprimer_confirm_dossier"]="Expediente";
$langchoisie["adresses_supprimer_confirm_exploite"]="La ficha está utilizada por los siguientes expedientes de";
$langchoisie["adresses_supprimer_confirm_h2"]="Suprimir la ficha n°";
$langchoisie["adresses_supprimer_confirm_supprimer"]="Suprimir";
$langchoisie["adresses_supprimer_confirm_title"]="Confirmación de supressión";
$langchoisie["adresses_supprimer_h2"]="Ficha suprimida";
$langchoisie["adresses_supprimer_retour"]="Página anterior";
$langchoisie["adresses_supprimer_title"]="Confirmación de supresión";
$langchoisie["afficher_operations_client"]="Cliente";
$langchoisie["afficher_operations_date"]="Fecha de la actividad";
$langchoisie["afficher_operations_details"]="Detalles";
$langchoisie["afficher_operations_dossier"]="Cliente";
$langchoisie["afficher_operations_entete_simple"]="Actividades en el expediente n° {$lang_utilisateur["nodossier"]}";
$langchoisie["afficher_operations_operation"]="Actividad realizada";
$langchoisie["afficher_operations_soit"]="sea";
$langchoisie["afficher_operations_temps"]="Tiempo dedicado";
$langchoisie["afficher_operations_title"]="Actividades en el expediente n° {$lang_utilisateur["nodossier"]} (utilisateur: {$lang_utilisateur["session_utilisateur"]} ; base de donnée: {$lang_utilisateur["session_avdb"]})";
$langchoisie["afficher_operations_total"]="Total";
$langchoisie["config_config_action"]="Ahora, elije el nombre del usuario para la administración del programa";
$langchoisie["config_config_creer"]="Crear usuario";
$langchoisie["config_config_h1"]="No has configurado Prolawyer";
$langchoisie["config_config_li1"]="Dispones de los derechos necesarios para escribir en el repertorio actual.";
$langchoisie["config_config_li2"]="Si trabajas con el sistema Linux, el dosier \"etude \" y todos sus sub-repertorios tienen como proprietario \"apache\" y como grupo \"apache\"";
$langchoisie["config_config_li3"]="Utilizas una base de datos de tipo MySql.";
$langchoisie["config_config_li4"]="Puedes crear una base de datos de cualquier nombre y una tabla de cualquier nombre en esta base.";
$langchoisie["config_config_nom"]="Nombre del administrador";
$langchoisie["config_config_pwd"]="Clave del administrador";
$langchoisie["config_config_root"]="Usuario root";
$langchoisie["config_config_rpwd"]="Clave root";
$langchoisie["config_config_t1"]="Para ello, debes elegir el nombre y la clave del administrador.";
$langchoisie["config_config_t2"]="Bajo \"usuario root\", debe indicar un usuario (inclusive la clave) que dispone de los derechos de administración en la base MySQL.";
$langchoisie["config_config_t3"]="Supongo que";
$langchoisie["config_config_title"]="Administración del programa";
$langchoisie["config_config_verify"]="Vérificar la clave";
$langchoisie["config_create_partner_echoue"]="La supresión ha fallado";
$langchoisie["config_create_partner_existe"]="Error! El nombre o las iniciales elegidas ya existen";
$langchoisie["config_create_partner_nul"]="Error! El nombre o las iniciales no pueden queadar en blanco";
$langchoisie["config_create_partner_title"]="Creación o destrucción del socio";
$langchoisie["config_create_user_non_concorde"]="Las claves no corresponden";
$langchoisie["config_create_user_title"]="Gestión de los usuarios";
$langchoisie["config_create_user_vide"]="La clave no puede quedar en blanco";
$langchoisie["config_login_h2"]="Identificate para modificar la configuración de Prolawyer";
$langchoisie["config_login_login"]="Conectarse";
$langchoisie["config_login_nom"]="Apellido";
$langchoisie["config_login_pwd"]="Clave";
$langchoisie["config_login_remarque"]="Comentario: si has creado un usuario, indícalo";
$langchoisie["config_modify_VAT"]="Porcentaje del IVA";
$langchoisie["config_modify_VAT_f"]="Porcentaje concertado del IVA (si es aplicable)";
$langchoisie["config_modify_administrateur"]="Administrador";
$langchoisie["config_modify_ajout_assoc"]="Puedes añadir un socio en el campo siguiente";
$langchoisie["config_modify_ajout_util"]="Puedes añadir o modificar un usuario usando el campo siguiente";
$langchoisie["config_modify_assoc_init"]="Iniciales del socio (2 letras juntas; ejemplo: \"os\")";
$langchoisie["config_modify_assoc_name"]="Nombre del socio";
$langchoisie["config_modify_associe"]="Socio";
$langchoisie["config_modify_changer"]="Cambiar";
$langchoisie["config_modify_compta"]="Contabilidad";
$langchoisie["config_modify_create"]="Crear";
$langchoisie["config_modify_create_db"]="Crear la base";
$langchoisie["config_modify_create_db_text"]="Puedes crear la base \"etude\" pulsando aquí";
$langchoisie["config_modify_create_table"]="Crear la tabla";
$langchoisie["config_modify_create_table_text"]="Puedes crear la tabla \"direcciones\" pulsando aquí";
$langchoisie["config_modify_currency"]="Divisa";
$langchoisie["config_modify_db"]="Base de datos";
$langchoisie["config_modify_db_modify"]="Puedes crear la base \"etude\" pulsando aquí";
$langchoisie["config_modify_delete"]="Destruir";
$langchoisie["config_modify_delete_the_user"]="Destruir el usuario";
$langchoisie["config_modify_delete_user"]="Destruir un usuario";
$langchoisie["config_modify_diag1"]="La base de datos etude existe";
$langchoisie["config_modify_diag2"]="Al menos un socio ha sido definido";
$langchoisie["config_modify_diag3"]="La tabla direcciones existe";
$langchoisie["config_modify_diag4"]="Al menos un usuario ha sido definido";
$langchoisie["config_modify_err1"]="La base de datos etude no existe";
$langchoisie["config_modify_err2"]="Ningún socio ha sido definido";
$langchoisie["config_modify_err3"]="La tabla direcciones no existe";
$langchoisie["config_modify_err4"]="Ningún usuario ha sido definido";
$langchoisie["config_modify_err_assoc"]="La tabla no existe";
$langchoisie["config_modify_h2"]="Modificación de opciones";
$langchoisie["config_modify_h3"]="Diagnóstico";
$langchoisie["config_modify_help"]="AYUDA";
$langchoisie["config_modify_init"]="iniciales";
$langchoisie["config_modify_lisible"]="puede leerse por";
$langchoisie["config_modify_maj"]="Poner a nivel la base";
$langchoisie["config_modify_maj_others"]="Enregistrar";
$langchoisie["config_modify_niveau0"]="Ningún derecho";
$langchoisie["config_modify_niveau1"]="Únicamente lectura";
$langchoisie["config_modify_niveau2"]="Leer y escribir";
$langchoisie["config_modify_niveau3"]="Leer, escribir y acceso al diario";
$langchoisie["config_modify_niveau4"]="Leer, escribir e IVA";
$langchoisie["config_modify_niveau5"]="Administrador";
$langchoisie["config_modify_no_proprietaire"]="sin proprietario";
$langchoisie["config_modify_options_Ecriture"]="Escritura";
$langchoisie["config_modify_options_audience"]="Audiencia";
$langchoisie["config_modify_options_conference"]="Conferencia";
$langchoisie["config_modify_options_etude"]="Examen del expediente";
$langchoisie["config_modify_options_fax"]="Fax";
$langchoisie["config_modify_options_lettre"]="Carta";
$langchoisie["config_modify_options_ouverture"]="Apertura del expediente";
$langchoisie["config_modify_options_telephone"]="Telefono";
$langchoisie["config_modify_options_tentative"]="Intento de contactar";
$langchoisie["config_modify_options_vacation"]="Desplazamiento";
$langchoisie["config_modify_others"]="Otras opciones para";
$langchoisie["config_modify_parts"]="Los socios siguientes estan enregistrados";
$langchoisie["config_modify_prix_defaut"]="Tarifa horaria básica";
$langchoisie["config_modify_proprietaire"]="gestionnaire";
$langchoisie["config_modify_proprietaire_de"]="gestionar la tabla de ";
$langchoisie["config_modify_proprietaires"]="gestionarios";
$langchoisie["config_modify_reg_parts"]="Socios enregistrados";
$langchoisie["config_modify_reg_utils"]="Usuarios enregistrados";
$langchoisie["config_modify_secretaire"]="Secretaria";
$langchoisie["config_modify_title"]="Modificación de opciones";
$langchoisie["config_modify_types_adresses"]="Tipo de direcciones";
$langchoisie["config_modify_types_comptes"]="Tipo de cuentas";
$langchoisie["config_modify_types_dossiers"]="Tipo de expedientes";
$langchoisie["config_modify_types_operations"]="Tipo de operaciones";
$langchoisie["config_modify_update"]="Poner al día";
$langchoisie["config_modify_util_name"]="Nombre";
$langchoisie["config_modify_util_pwd"]="Clave";
$langchoisie["config_modify_util_type"]="Tipo";
$langchoisie["config_modify_util_verif"]="Verificación";
$langchoisie["config_modify_utils"]="Los usuarios siguientes están enregistrados";
$langchoisie["config_modify_warning"]="Primero, debes crear la tabla \"direcciones\"";
$langchoisie["config_set_perm_concorde"]="Las claves no corresponden";
$langchoisie["config_set_perm_pspecifie"]="Debes especificar una clave";
$langchoisie["config_set_perm_root"]="El usuario root indicado no dispone de los derechos para la administrción de la base MySql o su clave no es válida";
$langchoisie["config_set_perm_specifie"]="Debes especificar un usuario";
$langchoisie["config_set_perm_title"]="Creación del administrador";
$langchoisie["config_verify_title"]="Administración del programa";
$langchoisie["config_verify_warning"]="Fallo de autorización. Prueve otra vez";
$langchoisie["creer_client_accepter"]="Aceptar";
$langchoisie["creer_client_adresse"]="Dirección";
$langchoisie["creer_client_alternative"]="Para crear una nueva ficha, utiliza el campo siguiente.";
$langchoisie["creer_client_creer_client"]="Crear la ficha";
$langchoisie["creer_client_fax"]="Fax";
$langchoisie["creer_client_fonction"]="Función";
$langchoisie["creer_client_h11"]="Selección del nuevo cliente (2a etapa)";
$langchoisie["creer_client_h11_ca"]="Selección del nuevo consejero de la parte contraria (2a etapa)";
$langchoisie["creer_client_h11_pa"]="Selección de la nueva parte contraria (2a etapa)";
$langchoisie["creer_client_h12"]="Creación de un nuevo expediente/cliente (2a etapa)";
$langchoisie["creer_client_h12_pa"]="Creación de un nuevo expediente/cliente (4a etapa)";
$langchoisie["creer_client_h21"]="Etapa 2: Confrentar con los datos encontrados";
$langchoisie["creer_client_h22"]="Etape 4: Confrentar con los datos encontrados";
$langchoisie["creer_client_h3"]="Expediente/cliente de";
$langchoisie["creer_client_h41"]="Las personas siguientes son <b>clientes</b>";
$langchoisie["creer_client_h42"]="Las personas siguientes son <b>partes contrarias</b>";
$langchoisie["creer_client_h43"]="Las personas siguientes estan <b>sin enregistrar</b>";
$langchoisie["creer_client_liste_recherche"]="Has buscado una persona cuyos datos contienen";
$langchoisie["creer_client_mail"]="Correo electrónico";
$langchoisie["creer_client_natel"]="Móvil";
$langchoisie["creer_client_nom"]="Apellido";
$langchoisie["creer_client_pays"]="País";
$langchoisie["creer_client_prenom"]="Nombre";
$langchoisie["creer_client_retour"]="Vuelta atrás";
$langchoisie["creer_client_tel"]="Telefono";
$langchoisie["creer_client_title"]="Selección del cliente";
$langchoisie["creer_client_titre"]="Título";
$langchoisie["creer_client_trouve"]="nombre encontrado";
$langchoisie["creer_client_trouves"]="nombres encontrados";
$langchoisie["creer_client_ville"]="Ciudad";
$langchoisie["creer_client_zip"]="Código postal";
$langchoisie["creer_dossier_cancel"]="Anular";
$langchoisie["creer_dossier_h11"]="Buscar un nuevo cliente";
$langchoisie["creer_dossier_h11_pa"]="Buscar una nuveva parte contraria";
$langchoisie["creer_dossier_h12"]="Creación de un nuveo expediente/cliente";
$langchoisie["creer_dossier_h21"]="Etapa 1: Combrobar si los datos corresponden a los datos de una persona registrada";
$langchoisie["creer_dossier_h21_ca"]="Etapa 1: Comprobar si los datos del consejero de la parte contraria corresponde una persona registrada";
$langchoisie["creer_dossier_h22_pa"]="Etapa 3: Comprobar si los datos de la parte contraria corresponden a una persona registrada";
$langchoisie["creer_dossier_nom"]="Nombre /cliente buscado";
$langchoisie["creer_dossier_pas_de_pa"]="Sin parte contraria";
$langchoisie["creer_dossier_recherche"]="Buscar";
$langchoisie["data_client_attente"]="En espera";
$langchoisie["data_client_avances"]="Adelantos";
$langchoisie["data_client_client"]="Cliente";
$langchoisie["data_client_date"]="Fecha de la operación";
$langchoisie["data_client_encaissements"]="Ingresos";
$langchoisie["data_client_nature"]="Tipo de mandato";
$langchoisie["data_client_no"]="N° de expediente/cliente";
$langchoisie["data_client_pa"]="Parte contraria";
$langchoisie["data_client_prix"]="Tarifa horaria";
$langchoisie["data_client_rentrees"]="Ingresos";
$langchoisie["data_client_resultat"]="Resultado del expediente";
$langchoisie["data_client_solde"]="Saldo debido";
$langchoisie["data_client_theorique"]="Teórico";
$langchoisie["data_client_total"]="Total teórico";
$langchoisie["data_client_tva"]="IVA";
$langchoisie["entete_adresses"]="Listado de direcciones";
$langchoisie["entete_adresses_accesskey"]="L";
$langchoisie["entete_base_en_cours"]="Base actual";
$langchoisie["entete_ca"]="Cifra de negocios";
$langchoisie["entete_ca_accesskey"]="C";
$langchoisie["entete_choisir_base"]="Seleccionar una base";
$langchoisie["entete_help"]="AYUDA";
$langchoisie["entete_help_accesskey"]="H";
$langchoisie["entete_journal"]="Libro contable";
$langchoisie["entete_journal_accesskey"]="J";
$langchoisie["entete_journal_op"]="Libro de operaciones";
$langchoisie["entete_liste_soldes"]="Listado de saldos";
$langchoisie["entete_liste_soldes_accesskey"]="S";
$langchoisie["entete_modifier"]="Modificar el expediente/cliente";
$langchoisie["entete_modifier_accesskey"]="M";
$langchoisie["entete_new"]="Nuevo expediente/cliente";
$langchoisie["entete_new_accesskey"]="O";
$langchoisie["entete_reconnect"]="Reconectarse";
$langchoisie["entete_reconnect_accesskey"]="T";
$langchoisie["entete_search"]="Buscar une expediente/cliente";
$langchoisie["entete_search_accesskey"]="R";
$langchoisie["entete_settings"]="Configuración";
$langchoisie["entete_settings_accesskey"]="G";
$langchoisie["entete_trash"]="Destrucción del expediente/cliente";
$langchoisie["entete_trash_accesskey"]="D";
$langchoisie["general_acces"]="Acceso directo a la página";
$langchoisie["general_au"]="a";
$langchoisie["general_du"]="de";
$langchoisie["general_from"]="de";
$langchoisie["general_mp"]="modificado por";
$langchoisie["general_non"]="no";
$langchoisie["general_non_accesskey"]="N";
$langchoisie["general_np"]="anotado por";
$langchoisie["general_oui"]="sí";
$langchoisie["general_oui_accesskey"]="O";
$langchoisie["general_records"]="enregistramientos";
$langchoisie["general_soit"]="sea";
$langchoisie["general_to"]="a";
$langchoisie["index_admin"]="Administración del programa";
$langchoisie["index_connect"]="Conectarse";
$langchoisie["index_h1"]="Bienvenido al programa de gestión Prolawyer";
$langchoisie["index_insert_data"]="Entra tu nombre y tu clave para conectarte a la base de datos";
$langchoisie["index_nom"]="Nombre";
$langchoisie["index_not_config_1"]="Todavía no has configurado Prolawyer. Pulsa aquí";
$langchoisie["index_not_config_2"]="aquí";
$langchoisie["index_not_config_3"]="para seguir";
$langchoisie["index_password"]="Clave";
$langchoisie["index_reset"]="Restablecer";
$langchoisie["index_title"]="Página de conección al servidor de operaciones";
$langchoisie["index_what_base"]="Qué base de datos utilizas";
$langchoisie["index_what_lang"]="Qué idioma hablas";
$langchoisie["liste_soldes_attente"]="En espera";
$langchoisie["liste_soldes_autres"]="Sin clasificar";
$langchoisie["liste_soldes_deficit"]="Expediente con déficit horario superior a";
$langchoisie["liste_soldes_dossiers"]="Listado de expedientes con";
$langchoisie["liste_soldes_h1"]="Listado de saldos";
$langchoisie["liste_soldes_manque"]="Adelantos a pedir";
$langchoisie["liste_soldes_nature"]="Tipo de mandato";
$langchoisie["liste_soldes_nom"]="Nombre del cliente";
$langchoisie["liste_soldes_numero"]="N°";
$langchoisie["liste_soldes_rechercher"]="Buscar los expedientes de tipo";
$langchoisie["liste_soldes_soumettre"]="Buscar";
$langchoisie["liste_soldes_title"]="Listado de saldos (usuario: {$lang_utilisateur["session_utilisateur"]} ; base de datos: {$lang_utilisateur["session_avdb"]})";
$langchoisie["liste_soldes_y_compris"]="Inclusive los expedientes archivados";
$langchoisie["maj_op_confirm_h1"]="Etas seguro?";
$langchoisie["maj_op_confirm_h2"]="Esta operación no puede ser anulada (supresión del expediente/cliente n° {$_POST["nodossier"]})";
$langchoisie["maj_op_err_1"]="Expediente del cliente sin destruir";
$langchoisie["maj_op_err_2"]="Operaciones sin destruir";
$langchoisie["maj_op_h1"]="Modificación de datos";
$langchoisie["maj_op_h2"]="Confirmación de supresión";
$langchoisie["maj_op_insere"]="Modificación ejecutada (expediente n° {$_POST["nodossier"]})";
$langchoisie["maj_op_insere_f"]="Modificación ejecutada (ficha n° {$_POST["id"]})";
$langchoisie["maj_op_ok_1"]="Expediente del cliente destruido";
$langchoisie["maj_op_ok_2"]="Operación destruida";
$langchoisie["maj_op_title"]="Gestión de operaciones";
$langchoisie["maj_op_vide"]="El número del expediente no puede permanecer vacio";
$langchoisie["modifier_donnees_adresse"]="Dirección";
$langchoisie["modifier_donnees_annuler"]="Anular";
$langchoisie["modifier_donnees_annuler_accesskey"]="A";
$langchoisie["modifier_donnees_autre"]="Otros datos";
$langchoisie["modifier_donnees_changer_client"]="Cambiar de cliente";
$langchoisie["modifier_donnees_changer_ca"]="Cambiar de consejero";
$langchoisie["modifier_donnees_changer_pa"]="Cambiar de parte contraria";
$langchoisie["modifier_donnees_client"]="Cliente";
$langchoisie["modifier_donnees_ca"]="Consejero";
$langchoisie["modifier_donnees_cp"]="Apartado de correos";
$langchoisie["modifier_donnees_date_archivage"]="Fecha de archivaje";
$langchoisie["modifier_donnees_date_ouverture"]="Fecha de apertura del expediente";
$langchoisie["modifier_donnees_fax"]="Fax";
$langchoisie["modifier_donnees_fonction"]="Función";
$langchoisie["modifier_donnees_h11"]="Finalización del expediente";
$langchoisie["modifier_donnees_h12"]="Modificación del expediente";
$langchoisie["modifier_donnees_h2"]="Pulsa sobre un nombre para modificarlo";
$langchoisie["modifier_donnees_imprimer_dossier"]="Imprimir";
$langchoisie["modifier_donnees_imprimer_dossier_accesskey"]="I";
$langchoisie["modifier_donnees_mail"]="Correo electrónico";
$langchoisie["modifier_donnees_modifier_client"]="Salvaguardar los datos del cliente";
$langchoisie["modifier_donnees_modifier_dossier"]="Modificar";
$langchoisie["modifier_donnees_modifier_dossier_accesskey"]="M";
$langchoisie["modifier_donnees_modifier_pa"]="Salvaguardar los datos de la parte contraria";
$langchoisie["modifier_donnees_natel"]="Móvil";
$langchoisie["modifier_donnees_nature_mandat"]="Tipo de mandato";
$langchoisie["modifier_donnees_no_archive"]="N° de archivo";
$langchoisie["modifier_donnees_nom"]="Apellido";
$langchoisie["modifier_donnees_pa"]="Parte contraria";
$langchoisie["modifier_donnees_pays"]="País";
$langchoisie["modifier_donnees_prenom"]="Nombre";
$langchoisie["modifier_donnees_prix"]="Tarifa horaria";
$langchoisie["modifier_donnees_remarques"]="Anotaciones";
$langchoisie["modifier_donnees_retour"]="Vuelta al expediente/cliente";
$langchoisie["modifier_donnees_retour_accesskey"]="u";
$langchoisie["modifier_donnees_tel"]="Telefono";
$langchoisie["modifier_donnees_title"]="Datos del expediente/cliente n° {$lang_utilisateur["nodossier"]}";
$langchoisie["modifier_donnees_titre"]="Título";
$langchoisie["modifier_donnees_type"]="Tipo de mandato";
$langchoisie["modifier_donnees_ville"]="Ciudad";
$langchoisie["modifier_donnees_zip"]="Código postal";
$langchoisie["modifier_op_h2"]="Modificación insertada";
$langchoisie["modifier_op_title"]="Modificación de operaciones";
$langchoisie["operations_ac"]="Libelado";
$langchoisie["operations_acpar"]="Cuenta";
$langchoisie["operations_actions"]="Acciones";
$langchoisie["operations_afficher"]="Presentar en pantalla";
$langchoisie["operations_afficher_accesskey"]="A";
$langchoisie["operations_afficher_liste"]="Presentar el listado de operaciones con";
$langchoisie["operations_afficher_recherche"]="Has busquado : ";
$langchoisie["operations_avances"]="Adelantos pagados";
$langchoisie["operations_avfrais"]="Avance gastos /<br>gastos";
$langchoisie["operations_compte"]="Cuenta";
$langchoisie["operations_dateac"]="Fecha de operación";
$langchoisie["operations_dateop"]="Fecha de la operación";
$langchoisie["operations_declare"]="IVA que declarar";
$langchoisie["operations_demande"]="Demanda";
$langchoisie["operations_encaissements"]="Ingresos";
$langchoisie["operations_entete"]="Encabezamiento";
$langchoisie["operations_facture"]="Factura";
$langchoisie["operations_facturesanstemps"]="Descuentos /<br>Otros";
$langchoisie["operations_limiter"]="Limitar al periodo";
$langchoisie["operations_modifier"]="Modificar";
$langchoisie["operations_net"]="Resultado neto";
$langchoisie["operations_nodossier"]="N°";
$langchoisie["operations_nouveau"]="Nuevo";
$langchoisie["operations_op"]="Libelado";
$langchoisie["operations_opavec"]="Detalles";
$langchoisie["operations_operation"]="Operación";
$langchoisie["operations_operations"]="Operaciones";
$langchoisie["operations_payer"]="IVA al porcentaje de";
$langchoisie["operations_recherche"]="Buscar";
$langchoisie["operations_rentree"]="Ingreso";
$langchoisie["operations_rentrees"]="Ingresos";
$langchoisie["operations_resultat"]="Resultado";
$langchoisie["operations_resume"]="Resumen";
$langchoisie["operations_supprimer"]="Suprimir";
$langchoisie["operations_tempsop"]="Tiempo";
$langchoisie["operations_title1"]="Operaciones para el expediente n°  {$_POST["nodossier"]} (usuario: {$_SESSION["session_utilisateur"]} ; base de datos: {$_SESSION["session_avdb"]})";
$langchoisie["operations_title2"]="Ingresos para el expediente n°  {$_POST["nodossier"]} (usuario: {$_SESSION["session_utilisateur"]} ; base de datos: {$_SESSION["session_avdb"]})";
$langchoisie["operations_title3"]="Libro de cuentas (utilisateur: {$_SESSION["session_utilisateur"]} ; base de datos: {$_SESSION["session_avdb"]})";
$langchoisie["operations_title3bis"]="Libro de operaciones (usuario: {$_SESSION["session_utilisateur"]} ; base de datos: {$_SESSION["session_avdb"]})";
$langchoisie["operations_title4"]="Resultados (base de datos: {$_SESSION["session_avdb"]})";
$langchoisie["operations_total"]="Total";
$langchoisie["operations_transit"]="Tránsito";
$langchoisie["operations_tva_pf"]="Versión imprimible";
$langchoisie["ra_activ"]="Actividad";
$langchoisie["ra_activdet"]="Detalle";
$langchoisie["ra_afficherdossier"]="Expediente";
$langchoisie["ra_aujourd"]="Hoy es el ";
$langchoisie["ra_avec_tva"]="con IVA";
$langchoisie["ra_date"]="Fecha actividad";
$langchoisie["ra_detjour"]="Detalles del día seleccionado";
$langchoisie["ra_detmois"]="Detalles del mes:";
$langchoisie["ra_dossiers"]="Expedientes abiertos (x 1000)";
$langchoisie["ra_erreur"]="error";
$langchoisie["ra_fricann"]="Suma total anual:";
$langchoisie["ra_fricjour"]="Suma total del día:";
$langchoisie["ra_fricmois"]="Suma total del mes:";
$langchoisie["ra_global"]="De base";
$langchoisie["ra_hono_enc"]="Honorarios encajados (con IVA)";
$langchoisie["ra_hono_ts"]="Honorarios según timesheet (con IVA)";
$langchoisie["ra_jourcher"]="Día buscado: ";
$langchoisie["ra_link"]=" R A ";
$langchoisie["ra_prix"]="Tarifa horaria";
$langchoisie["ra_rien"]="Nada en el día de hoy";
$langchoisie["ra_temps"]="Tiempo facturado";
$langchoisie["ra_tempsann"]="Tiempo total anual:";
$langchoisie["ra_tempsjour"]="Tiempo total del día:";
$langchoisie["ra_tempsmois"]="Tiempo total del mes:";
$langchoisie["ra_titre"]="Diario de actividades";
$langchoisie["ra_tx_moyen"]="Tasa horaria media sin IVA (x 100)";
$langchoisie["ra_voirdossier"]="Ver el expediente/cliente";
$langchoisie["recherche_dossier_nom"]="Nombre del cliente";
$langchoisie["recherche_dossier_numero"]="N° del expediente";
$langchoisie["recherche_dossier_recherche"]="Buscar";
$langchoisie["recherche_dossier_title"]="Buscar un expediente/cliente";
$langchoisie["resultat_recherche_action"]="Acción";
$langchoisie["resultat_recherche_coordonnees"]="Coordenadas del cliente <br>(le <b>nombre</b> en negro)";
$langchoisie["resultat_recherche_criteres"]="Buscar según los criterios siguientes";
$langchoisie["resultat_recherche_nature"]="Tipo de expediente";
$langchoisie["resultat_recherche_nocritere"]="sin criterio";
$langchoisie["resultat_recherche_nodossier"]="N° del expediente/cliente";
$langchoisie["resultat_recherche_nom"]="Nombre del cliente";
$langchoisie["resultat_recherche_nouvelle"]="Ejecutar una nueva búsqueda ?";
$langchoisie["resultat_recherche_pa"]="Parte contraria";
$langchoisie["resultat_recherche_rechercher"]="Buscar";
$langchoisie["resultat_recherche_record"]="enregistramiento";
$langchoisie["resultat_recherche_records"]="enregistramientos";
$langchoisie["resultat_recherche_rien_trouve"]="Sin enregistramiento encontrado";
$langchoisie["resultat_recherche_selectionner"]="Seleccionar";
$langchoisie["resultat_recherche_title"]="Resultado de la búsqueda (usuario: {$lang_utilisateur["session_utilisateur"]}; base de datos: {$lang_utilisateur["session_avdb"]})";
$langchoisie["resultat_recherche_titre"]="Título";
$langchoisie["resultat_recherche_touche"]="Tecla";
$langchoisie["resultat_recherche_trouves"]="He encontrado";
$langchoisie["supprimer_dossier_confirm_h11"]="Estas seguro ?";
$langchoisie["supprimer_dossier_confirm_h12"]="Esta operación es irreversible";
$langchoisie["supprimer_dossier_confirm_title"]="Confirmación de supresión";
$langchoisie["supprimer_dossier_donnees"]="Datos del cliente destruidos";
$langchoisie["supprimer_dossier_donnees_no"]="Datos del cliente sin destruir";
$langchoisie["supprimer_dossier_op"]="Operaciones del cliente destruidas";
$langchoisie["supprimer_dossier_op_no"]="Operaciones del cliente sin destruir";
$langchoisie["supprimer_dossier_title"]="Confirmación de supresión";
$langchoisie["verify_en_cours"]="Actualmente estas trabajando en la base de datos {$lang_utilisateur["start_avdb"]}";
$langchoisie["verify_nom"]="Nombre del cliente";
$langchoisie["verify_numero"]="N° del expediente";
$langchoisie["verify_recherche"]="Buscar";
$langchoisie["verify_retry"]="Nuevo ensayo";
$langchoisie["verify_sorry"]="Lo siento, el usuario {$lang_utilisateur["start_utilisateur"]} no dispone de los derechos de acceso o a introducido una clave incorrecta";
$langchoisie["verify_title"]="Bienvenido al programa";
$langchoisie["verify_welcome"]="Bienvenido";
?>