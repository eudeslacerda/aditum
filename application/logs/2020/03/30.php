
2020-03-30 07:48:58 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`aditum`.`usuarios`, CONSTRAINT `fk_usuarios_tipousuarios1` FOREIGN KEY (`tipousuario_id`) REFERENCES `tipousuarios` (`id`) ON DELETE CASCADE) [ INSERT INTO usuarios (email, nomeusuario, senha) VALUES ('eude.lacerda@gmail.com', 'eude', 'Edsl1489') ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 157 ] in D:\xampp\htdocs\aditum.local\modules\database\classes\Kohana\Database\Query.php:251
2020-03-30 07:48:58 --- DEBUG: #0 D:\xampp\htdocs\aditum.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO usu...', false, Array)
#1 D:\xampp\htdocs\aditum.local\modules\orm\classes\Kohana\ORM.php(1488): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\aditum.local\modules\orm\classes\Kohana\ORM.php(1591): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\aditum.local\application\classes\Model\Usuario.php(35): Kohana_ORM->save()
#4 D:\xampp\htdocs\aditum.local\application\classes\Controller\Usuario.php(16): Model_Usuario::salvar(Array)
#5 D:\xampp\htdocs\aditum.local\system\classes\Kohana\Controller.php(84): Controller_Usuario->action_novo()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\aditum.local\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionMethod->invoke(Object(Controller_Usuario))
#8 D:\xampp\htdocs\aditum.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\aditum.local\system\classes\Kohana\Request.php(1000): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\aditum.local\public\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\aditum.local\modules\database\classes\Kohana\Database\Query.php:251
2020-03-30 14:47:47 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`aditum`.`usuarios`, CONSTRAINT `fk_usuarios_tipousuarios1` FOREIGN KEY (`tipousuario_id`) REFERENCES `tipousuarios` (`id`) ON DELETE CASCADE) [ INSERT INTO usuarios (email, nomeusuario, senha) VALUES ('', '', '') ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 157 ] in D:\xampp\htdocs\aditum.local\modules\database\classes\Kohana\Database\Query.php:251
2020-03-30 14:47:47 --- DEBUG: #0 D:\xampp\htdocs\aditum.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO usu...', false, Array)
#1 D:\xampp\htdocs\aditum.local\modules\orm\classes\Kohana\ORM.php(1488): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\aditum.local\modules\orm\classes\Kohana\ORM.php(1591): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\aditum.local\application\classes\Model\Usuario.php(35): Kohana_ORM->save()
#4 D:\xampp\htdocs\aditum.local\application\classes\Controller\Usuario.php(16): Model_Usuario::salvar(Array)
#5 D:\xampp\htdocs\aditum.local\system\classes\Kohana\Controller.php(84): Controller_Usuario->action_novo()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\aditum.local\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionMethod->invoke(Object(Controller_Usuario))
#8 D:\xampp\htdocs\aditum.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\aditum.local\system\classes\Kohana\Request.php(1000): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\aditum.local\public\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\aditum.local\modules\database\classes\Kohana\Database\Query.php:251