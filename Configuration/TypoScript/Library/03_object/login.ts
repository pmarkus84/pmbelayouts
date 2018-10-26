/*
 *    Project:	PARAT Intranet Konfiguration - PARAT_Intranet_Konfiguration
 *    Version:	1.0.0
 *    Date:	30.01.2018 10:20:07
 *    Author:	Markus Puffer <m.puffer@pm-webdesign.eu> 
 *
 *    Coded with Netbeans!
 */

# Loginformular
temp.login = COA
temp.login {
	10 = TEXT
	10.value = <form class="form-inline" action="
	20 = TEXT
	20.typolink {
		parameter.data = TSFE:id
		returnLast = url
	} 
	30 = TEXT
	30.value = " enctype="multipart/form-data" method="post" class="loginform">        
	40 = TEXT
	40.value = <div class="form-group"><input name="logintype" value="login" type="hidden" />
	50 = TEXT
	50.value = <input name="pid" value="{$pid_feuser}" type="hidden" />
        55 = TEXT
        55.value = <div class="nav-link"><label for="name" class="sr-only">Username</label>
	60 = TEXT
	60.value = <input name="user" size="7" value="Username" onfocus="if(this.value=='Username') this.value='';" onblur="if(this.value=='') this.value='Username';" type="text" id="user" class="form-control form-control-sm mr-sm-2" />
	65 = TEXT
        65.value = <label for="pass" class="sr-only">Password</label>
        70 = TEXT
	70.value = <input name="pass" size="7" value="Dein Passwort" onfocus="if(this.value=='Dein Passwort') this.value='';" onblur="if(this.value=='') this.value='Dein Passwort';" data-rsa-encryption="" type="password" id="pass" class="form-control form-control-sm mr-sm-2" />
	80 = TEXT
	80.value = <input name="submit" value="Login" type="submit" class="btn btn-primary btn-sm" /></div>
        85 = TEXT
        85.value = </div>
	100 = TEXT
	100.value = </form>
}

# Logoutbutton
temp.logout = COA_INT
temp.logout {
        5 = TEXT
	5.typolink {
		parameter = {$pid_logout_redirect}
		returnLast = url
	} 
        5.wrap = <form class="form-inline mt-2" target="_top" method="post" action="
        6 = TEXT
        6.typolink {
               parameter.data = TSFE:id
               returnLast = url 
        }
        7 = TEXT
        7.value = ">
        10 = TEXT
	10.dataWrap = <div class="form-group"><div style="text-transform:none" class="nav-link logoutname mr-sm-2">{TSFE:fe_user|user|name}</div>
	20 = TEXT
	20.value = <div class="nav-link"><div class="btn-group dropdown"><input name="submit" value="Logout" type="submit" class="btn btn-primary btn-sm"><button type="button" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu"><a class="dropdown-item" href="#">Profil Bearbeiten</a></div></div>
	30 = TEXT	
	30.value = <input type="hidden" name="logintype" value="logout" >
                   <input type="hidden" name="pid" value="{$pid_feuser}">
                   <input type="hidden" name="tx_felogin_pi1[noredirect]" value="0">	
	50 = TEXT
	50.value = </div></form>
}
lib.loginformular = COA
[usergroup = *]
    lib.loginformular < temp.logout
[else]
    lib.loginformular < temp.login
[end]