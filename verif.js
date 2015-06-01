
var testverifnom=true;
var testverifpre=true;
var testverifadresse=true;
var testverifville=true;
var testverifmail=true;
var testverifmail2=true;
var testvalidation=true;
var testglobal=true;
var testverifprof=true;
var testverifpost=true;


function color(champ, erreur)
{
	if(erreur)
		champ.style.backgroundColor = "#EE5E1B";
	else
		champ.style.backgroundColor = "#69B934";
}


function verifnom()
{
	if(last_name.value <1)
		{
			color(last_name, true);
			testverifnom= false;
		}
		else
		{
			color(last_name, false);
			testverifnom=true;
		}
}

function verifpre()
{
	if(first_name.value <1)
		{
			color(first_name, true);
			testverifpre=false;
		}
		else
		{
			color(first_name, false);
			testverifpre=true;
			
		}
}

function verifadresse()
{
	if(user_post_office_box.value <1)
		{
			color(user_post_office_box, true);
			testverifadresse=false;
		}
		else
		{
			color(user_post_office_box, false);
			testverifadresse=true;
		}
}

function verifprof()
{
	if(job.value <1)
		{
			color(job, true);
			testverifprof= false;
		}
		else
		{
			color(job, false);
			testverifprof=true;
		}
}


function verifville()
{
	if(city.value <1)
		{
			color(city, true);
			testverifville=false;
		}
		else
		{
			color(city, false);
			testverifville=true;
		}
}

function verifmail()
{
		var caractere = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
		if(!caractere.test(email.value))

		{
			color(email, true);
			testverifmail=false;
		}
		else
		{
			color(email, false);
			testverifmail=true;
		}
}



function verifmail2()
{
		var caractere = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
		if(!caractere.test(email2.value))
		{
			color(email2, true);
			testverifmail2=false;
		}
		else
		{
			color(email2, false);
			testverifmail2=true;
		}
}



function verifpost()
{
	if(country.value <1)
		{
			color(country, true);
			testverifpost=false;
		}
		else
		{
			color(country, false);
			testverifpost=true;
		}
}






 function super2()
 {
	if(testverifnom && testverifpre && testverifadresse && testverifville && testverifmail && testverifmail2 && testverifprof && testverifpost)
	{
	
	return true;
	}
	else
	{
	 return false
	}
}

