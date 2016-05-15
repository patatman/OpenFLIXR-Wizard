<?php
foreach ($_POST as $param_name => $param_val) {
    echo "Param: $param_name; Value: $param_val<br />\n";
}

#password
$password = $_POST['password'];

#network
$dhcp = $_POST['dhcp'];
$static = $_POST['static'];
$ip = $_POST['ip'];
$subnet = $_POST['subnet'];
$gateway = $_POST['gateway'];
$dns = $_POST['dns'];

#access
$local = $_POST['local'];
$remote = $_POST['remote'];
$domainname = $_POST['domainname'];
$email = $_POST['email'];

#usenet
$usenetdescription = $_POST['usenetdescription'];
$usenetservername = $_POST['usenetservername'];
$usenetusername = $_POST['usenetusername'];
$usenetpassword = $_POST['usenetpassword'];
$usenetport = $_POST['usenetport'];
$usenetthreads = $_POST['usenetthreads'];
$usenetssl = $_POST['usenetssl'];

#newznab
$newznabprovider = $_POST['newznabprovider'];
$newznaburl = $_POST['newznaburl'];
$newznabapi = $_POST['newznabapi'];

#modules
$tvshowdl = $_POST['tvshowdl'];
$nzbdl = $_POST['nzbdl'];
$mopidy = $_POST['mopidy'];
$syncthing = $_POST['syncthing'];
$hass = $_POST['hass'];
$ntopng = $_POST['ntopng'];

#extras
$headphonesuser = $_POST['headphonesuser'];
$headphonespass = $_POST['headphonespass'];
$anidbuser = $_POST['anidbuser'];
$anidbpass = $_POST['anidbpass'];
$spotuser = $_POST['spotuser'];
$spotpass = $_POST['spotpass'];
$imdb = $_POST['imdb'];
$comicvine = $_POST['comicvine'];

#write config.ini
$file = fopen("config.ini","w");
fwrite($file,"[network]
dhcp = $dhcp
static = $static
ip = $ip
subnet = $subnet
gateway = $gateway
dns = $dns

[password]
password = $password

[access]
local = $local
remote = $remote
domainname = $domainname
email = $email

[usenet]
usenetdescription = $usenetdescription
usenetservername = $usenetservername
usenetusername = $usenetusername
usenetpassword = $usenetpassword
usenetport = $usenetport
usenetthreads = $usenetthreads
usenetssl = $usenetssl

[newznab]
newznabprovider = $newznabprovider
newznaburl = $newznaburl
newznabapi = $newznabapi

[modules]
tvshowsdl = $tvshowdl
nzbdl = $nzbdl
mopidy = $mopidy
syncthing = $syncthing
hass = $hass
ntopng = $ntopng

[extras]
headphonesuser = $headphonesuser
headphonespass = $headphonespass
anidbuser = $anidbuser
anidbpass = $anidbpass
spotuser = $spotuser
spotpass = $spotpass
imdb = $imdb
comicvine = $comicvine
");
fclose($file);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>OpenFLIXR setup review</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/gsdk-base.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('img/bg.jpg')">

    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

     <div class="tab-content">

     	 <div class="wizard-container">
                <div class="card wizard-card ct-wizard-azzure" id="wizard">

                            <div class="tab-pane" id="setup" name="messagebox">
                              <h4 class="info-text">Verify settings</h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-5 col-sm-offset-1">
                                          <label>Network settings</label>
                                      <h8>DHCP</h8><p><?php echo "$dhcp"; ?></p>
                                      <h8>Static</h8><p><?php echo "$static"; ?></p>
                                			<h8>IP address</h8><p><?php echo "$ip"; ?></p>
                                			<h8>Subnet</h8><p><?php echo "$subnet"; ?></p>
                                			<h8>Gateway</h8><p><?php echo "$gateway"; ?></p>
                                      <h8>DNS Server</h8><p><?php echo "$dns"; ?></p>
                                        </div>

                                        <div class="col-sm-5 col-sm-offset-1">
											                      <label>Let's Encrypt</label>
                                            <h8>Local</h8><p><?php echo "$local"; ?></p>
                                            <h8>Remote</h8><p><?php echo "$remote"; ?></p>
                                            <h8>Domain name</h8><p><?php echo "$domainname"; ?></p>
                                            <h8>E-mail address</h8><p><?php echo "$email"; ?></p>
                                        </div>
                                      </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Usenet</label>
                                            <h8>Description</h8><p><?php echo "$usenetdescription"; ?></p>
                                            <h8>Servername</h8><p><?php echo "$usenetservername"; ?></p>
                                            <h8>Username</h8><p><?php echo "$usenetusername"; ?></p>
                                            <h8>Password</h8><p><?php echo "$usenetpassword"; ?></p>
                                            <h8>Port</h8><p><?php echo "$usenetport"; ?></p>
                                            <h8>Threads</h8><p><?php echo "$usenetthreads"; ?></p>
                                            <h8>SSL</h8><p><?php echo "$usenetssl"; ?></p>

                                        <h8>WORK IN PROGRESS</h8>
                                      </div>
                                      <div class="col-sm-5 col-sm-offset-1">
                                        <h6>Newznab</h6>
                                        <h8>Provider</h8><p><?php echo "$newznabprovider"; ?></p>
                                        <h8>URL</h8><p><?php echo "$newznaburl"; ?></p>
                                        <h8>API</h8><p><?php echo "$newznabapi"; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-5 col-sm-offset-1">
											                      <h6>Global password</h6>
                                			<h8>Password</h8><p><?php echo "$password"; ?></p>
                                        </div>
                                      </div>
                                      <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-5 col-sm-offset-1">
                                        <h6>Miscellaneous</h6>
                                        <h8>Headphones</h8><p><?php echo "$headphones"; ?></p>
                                        <h8>AniDB</h8><p><?php echo "$anidb"; ?></p>
                                        <h8>Plex</h8><p><?php echo "$plex"; ?></p>
                                        <h8>Comic Vine</h8><p><?php echo "$imdb"; ?></p>
                                    </div>
                                  </div>
                                  </div>
                                </div>
                            </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Confirm' />

                                    </div>
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Go back' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                        </div>
                      </body>
                  </html>
