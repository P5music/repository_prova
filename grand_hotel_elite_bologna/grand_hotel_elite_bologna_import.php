<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .language-selector {
            text-align: center;
            margin-top: 20px;
        }
        .language-option {
           display: flex;
    align-items: center;
            margin: 10px;
            cursor: pointer;
        }
        .language-option img {
            width: 50px;
	 margin-right: 20px;
            height: auto;
        }

a {
    text-decoration: none; /* Rimuove la sottolineatura */
}

        .language-option span {
            display: block;
  font-size: 30px; /* Modifica questo valore per cambiare la dimensione del testo */
        }
    </style>
<script src="/features_script.js"></script>
<script>
function getPlatformVariantString()
{
return 'ios';
if (/iPhone|iPad/i.test(navigator.userAgent)) {
  // Dispositivo iOS rilevato
return 'ios';
} else {
  // Non è un dispositivo iOS
return 'android';
}

};

function sendImport(event,dataobject)
{

let platform=getPlatformVariantString();
dataobject.variants+=','+platform;

event.currentTarget.setAttribute('data-json-object',JSON.stringify(dataobject));

importListWithUrl(event);
};
</script>
</head>
<body>
<?php include '../../i18n_setup.php' ?>
    <div class="language-selector">
        <h2><?=_('choose_language')?></h2>
        <a onclick='sendImport(event,{"expirationTime":-1,"url":"https://www.myqueries.info/demo/grand_hotel_elite_bologna/grand_hotel_elite_bologna_import.myq","variants":"it","codes":"ghelitebologna","namespaces":"https://www.myqueries.info/demo/grand_hotel_elite_bologna","enabled":true});' 


href="https://www.myqueries.info/demo/grand_hotel_elite_bologna/grand_hotel_elite_bologna_import.myq" class="language-option">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Bandiera_italiana_foto.svg" alt="Bandiera lingua italiana">
            <span>Italiano</span>
        </a>
        <a onclick='sendImport(event,{"expirationTime":-1,"url":"https://www.myqueries.info/demo/grand_hotel_elite_bologna/grand_hotel_elite_bologna_import.myq","variants":"en","codes":"ghelitebologna","namespaces":"https://www.myqueries.info/demo/grand_hotel_elite_bologna","enabled":true});' 

href="https://www.myqueries.info/demo/grand_hotel_elite_bologna/grand_hotel_elite_bologna_import.myq" class="language-option">
            <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg" alt="Bandiera lingua inglese">
            <span>English</span>
        </a>

    </div>
</body>
</html>