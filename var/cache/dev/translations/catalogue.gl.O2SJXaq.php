<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('gl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadeiro.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar baleiro.',
    'The value you selected is not a valid choice.' => 'O valor seleccionado non é unha opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar polo menos {{ limit }} opción.|Debe seleccionar polo menos {{ limit }} opcions.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opcions.',
    'One or more of the given values is invalid.' => 'Un ou máis dos valores indicados non son válidos.',
    'This field was not expected.' => 'Este campo non era esperado.',
    'This field is missing.' => 'Este campo falta.',
    'This value is not a valid date.' => 'Este valor non é unha data válida.',
    'This value is not a valid datetime.' => 'Este valor non é unha data e hora válidas.',
    'This value is not a valid email address.' => 'Este valor non é unha dirección de correo electrónico válida.',
    'The file could not be found.' => 'Non se puido atopar o arquivo.',
    'The file is not readable.' => 'O arquivo non se pode ler.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é demasiado grande ({{ size }} {{ suffix }}). O tamaño máximo permitido é {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'O tipo mime do arquivo non é válido ({{ type }}). Os tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} ou menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor é demasiado longo. Debería ter {{ limit }} carácter ou menos.|Este valor é demasiado longo. Debería ter {{ limit }} caracteres ou menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} ou máis.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor é demasiado curto. Debería ter {{ limit }} carácter ou máis.|Este valor é demasiado corto. Debería ter {{ limit }} caracteres ou máis.',
    'This value should not be blank.' => 'Este valor non debería estar baleiro.',
    'This value should not be null.' => 'Este valor non debería ser null.',
    'This value should be null.' => 'Este valor debería ser null.',
    'This value is not valid.' => 'Este valor non é válido.',
    'This value is not a valid time.' => 'Este valor non é unha hora válida.',
    'This value is not a valid URL.' => 'Este valor non é unha URL válida.',
    'The two values should be equal.' => 'Os dous valores deberían ser iguais.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é demasiado grande. O tamaño máximo permitido é {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'O arquivo é demasiado grande.',
    'The file could not be uploaded.' => 'No se puido cargar o arquivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'O arquivo non é unha imaxe válida.',
    'This is not a valid IP address.' => 'Isto non é unha dirección IP válida.',
    'This value is not a valid language.' => 'Este valor non é un idioma válido.',
    'This value is not a valid locale.' => 'Este valor non é unha localización válida.',
    'This value is not a valid country.' => 'Este valor non é un país válido.',
    'This value is already used.' => 'Este valor xa está a ser empregado.',
    'The size of the image could not be detected.' => 'Non se puido determinar o tamaño da imaxe.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A largura da imaxe é demasiado grande ({{ width }}px). A largura máxima permitida son {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A largura da imaxe é demasiado pequena ({{ width }}px). A largura mínima requerida son {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A altura da imaxe é demasiado grande ({{ height }}px). A altura máxima permitida son {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A altura da imaxe é demasiado pequena ({{ height }}px). A altura mínima requerida son {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser a contrasinal actual do usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería ter exactamente {{ limit }} carácter.|Este valor debería ter exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'O arquivo foi só subido parcialmente.',
    'No file was uploaded.' => 'Non se subiu ningún arquivo.',
    'No temporary folder was configured in php.ini.' => 'Ningunha carpeta temporal foi configurada en php.ini, ou a carpeta non existe.',
    'Cannot write temporary file to disk.' => 'Non se puido escribir o arquivo temporal no disco.',
    'A PHP extension caused the upload to fail.' => 'Unha extensión de PHP provocou que a subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe conter {{ limit }} elemento ou máis.|Esta colección debe conter {{ limit }} elementos ou máis.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe conter {{ limit }} elemento ou menos.|Esta colección debe conter {{ limit }} elementos ou menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe conter exactamente {{ limit }} elemento.|Esta colección debe conter exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarxeta non válido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarxeta non soportado ou número de tarxeta non válido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Este valor non é un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor non é un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor non é un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor non é nin un ISBN-10 válido nin un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor non é un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor non é unha moeda válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser maior que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser maior ou igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser identico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor ou igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor non debería ser igual a {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor non debería ser identico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'A proporción da imaxe é demasiado grande ({{ ratio }}). A proporción máxima permitida é {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'A proporción da é demasiado pequena ({{ ratio }}). A proporción mínima permitida é {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A imaxe é cadrada ({{ width }}x{{ height }}px). As imáxenes cadradas non están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A imaxe está orientada horizontalmente ({{ width }}x{{ height }}px). As imáxenes orientadas horizontalmente non están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A imaxe está orientada verticalmente ({{ width }}x{{ height }}px). As imáxenes orientadas verticalmente non están permitidas.',
    'An empty file is not allowed.' => 'Non está permitido un arquivo baleiro.',
    'The host could not be resolved.' => 'Non se puido resolver o host.',
    'This value does not match the expected {{ charset }} charset.' => 'A codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Non é un Código de Identificación Bancaria (BIC) válido.',
    'Error' => 'Erro',
    'This is not a valid UUID.' => 'Isto non é un UUID válido.',
    'This value should be a multiple of {{ compared_value }}.' => 'Este valor debería ser multiplo de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Este Código de identificación bancaria (BIC) non está asociado co IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Este valor debería ser un JSON válido.',
    'This collection should contain only unique elements.' => 'Esta colección só debería ter elementos únicos.',
    'This value should be positive.' => 'Este valor debería ser positivo.',
    'This value should be either positive or zero.' => 'Este valor debe ser positivo ou igual a cero.',
    'This value should be negative.' => 'Este valor debe ser negativo.',
    'This value should be either negative or zero.' => 'Este valor debe ser negativo ou igual a cero.',
    'This value is not a valid timezone.' => 'Este valor non é unha zona horaria válida.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Este contrasinal non se pode usar porque está incluído nunha lista de contrasinais públicos obtidos grazas a fallos de seguridade noutros sitios e aplicacións. Utiliza outro contrasinal.',
    'This value should be between {{ min }} and {{ max }}.' => 'Este valor debe estar comprendido entre {{ min }} e {{ max }}.',
    'This value is not a valid hostname.' => 'Este valor non é un nome de host válido.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'O número de elementos desta colección debería ser múltiplo de {{compare_value}}.',
    'This value should satisfy at least one of the following constraints:' => 'Este valor debe cumprir polo menos unha das seguintes restricións:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Cada elemento desta colección debe satisfacer o seu propio conxunto de restricións.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Este valor non é un número de identificación de valores internacionais (ISIN) válido.',
    'This value should be a valid expression.' => 'Este valor debe ser unha expresión válida.',
    'This value is not a valid CSS color.' => 'Este valor non é unha cor CSS válida.',
    'This value is not a valid CIDR notation.' => 'Este valor non ten unha notación CIDR válida.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'O valor da máscara de rede debería estar entre {{ min }} e {{ max }}.',
    'This form should not contain extra fields.' => 'Este formulario non debería conter campos adicionais.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O arquivo subido é demasiado grande. Por favor, suba un arquivo máis pequeno.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF non é válido. Por favor, probe a enviar novamente o formulario.',
    'This value is not a valid HTML5 color.' => 'Este valor non é unha cor HTML5 válida.',
    'Please enter a valid birthdate.' => 'Insire unha data de aniversario válida.',
    'The selected choice is invalid.' => 'A opción seleccionada non é válida.',
    'The collection is invalid.' => 'A colección non é válida.',
    'Please select a valid color.' => 'Por favor, seleccione unha cor válida.',
    'Please select a valid country.' => 'Por favor, seleccione un país válido.',
    'Please select a valid currency.' => 'Por favor, seleccione unha moeda válida.',
    'Please choose a valid date interval.' => 'Por favor, escolla un intervalo de datas válido.',
    'Please enter a valid date and time.' => 'Por favor, introduza unha data e hora válidas.',
    'Please enter a valid date.' => 'Por favor, introduce unha data válida.',
    'Please select a valid file.' => 'Por favor, seleccione un ficheiro válido.',
    'The hidden field is invalid.' => 'O campo oculto non é válido.',
    'Please enter an integer.' => 'Por favor, introduza un número enteiro.',
    'Please select a valid language.' => 'Por favor, selecciona un idioma válido.',
    'Please select a valid locale.' => 'Por favor, seleccione unha configuración rexional válida.',
    'Please enter a valid money amount.' => 'Por favor, introduza unha cantidade de diñeiro válida.',
    'Please enter a number.' => 'Por favor, introduza un número.',
    'The password is invalid.' => 'O contrasinal non é válido.',
    'Please enter a percentage value.' => 'Por favor, introduza un valor porcentual.',
    'The values do not match.' => 'Os valores non coinciden.',
    'Please enter a valid time.' => 'Por favor, introduza unha hora válida.',
    'Please select a valid timezone.' => 'Por favor, selecciona unha zona horaria válida.',
    'Please enter a valid URL.' => 'Por favor, introduce un URL válido.',
    'Please enter a valid search term.' => 'Por favor, introduce un termo de busca válido.',
    'Please provide a valid phone number.' => 'Por favor, fornecer un número de teléfono válido.',
    'The checkbox has an invalid value.' => 'A caixa de verificación ten un valor non válido.',
    'Please enter a valid email address.' => 'Por favor, introduce un enderezo de correo electrónico válido.',
    'Please select a valid option.' => 'Por favor, seleccione unha opción válida.',
    'Please select a valid range.' => 'Por favor, seleccione un intervalo válido.',
    'Please enter a valid week.' => 'Por favor, introduce unha semana válida.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocorreu un erro de autenticación.',
    'Authentication credentials could not be found.' => 'Non se atoparon as credenciais de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'A solicitude de autenticación no puido ser procesada debido a un problema do sistema.',
    'Invalid credentials.' => 'Credenciais non válidas.',
    'Cookie has already been used by someone else.' => 'A cookie xa foi empregado por outro usuario.',
    'Not privileged to request the resource.' => 'Non ten privilexios para solicitar o recurso.',
    'Invalid CSRF token.' => 'Token CSRF non válido.',
    'No authentication provider found to support the authentication token.' => 'Non se atopou un provedor de autenticación que soporte o token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'Non hai ningunha sesión dispoñible, expirou ou as cookies non están habilitadas.',
    'No token could be found.' => 'Non se atopou ningún token.',
    'Username could not be found.' => 'Non se atopou o nome de usuario.',
    'Account has expired.' => 'A conta expirou.',
    'Credentials have expired.' => 'As credenciais expiraron.',
    'Account is disabled.' => 'A conta está deshabilitada.',
    'Account is locked.' => 'A conta está bloqueada.',
    'Too many failed login attempts, please try again later.' => 'Demasiados intentos de inicio de sesión fallados. Téntao de novo máis tarde.',
    'Invalid or expired login link.' => 'Ligazón de inicio de sesión non válida ou caducada.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Demasiados intentos de inicio de sesión errados, por favor, ténteo de novo en %minutes% minuto.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Demasiados intentos de inicio de sesión errados, por favor, ténteo de novo en %minutes% minutos.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
