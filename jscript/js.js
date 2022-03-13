// JavaScript Document
total=0;
function da(vl)
{
var a, g= "" ;
a = document.getElementById(vl).value;
 if(a != "")
	    {
			a =a.split("") ;
			//alert(a);
			l = a.length ;
			//alert(l);
			for (i = 0 ; i < l ; i++)
			{
				if (isNaN(parseInt(a[i])))
				{
					a[i] = "" ;
				}
					g += a[i] ;
			}
			document.getElementById(vl).value = g ;
		}
		setTimeout('da()',10);
		return;
}
function da2(l,m,n,o)
{ 
	da(l);
	var odr,prc,avl,d, sum,sumbox, total;
	ad=0;
	odr=document.getElementById(l).value;
	prc=document.getElementById(m).value;
	avl=document.getElementById(n).value;
	sumbox=document.getElementById(o).value;
	sum=odr*prc;
	document.getElementById(o).value=sum;
	sumbox=document.getElementById(o).value;
	if(sumbox==0)
	{ document.getElementById(o).value="";}
	chk();
	total=total+sum;
}
function da3(im, srcc)
{
	document.getElementById('p').src=srcc;
	//alert(srcc);
}
function chk()
{
	var v, ad=0,c;
	for (i=1; i<6;i++)
	{
		v=document.getElementById('sm'+i).value;
		v=parseInt(v);
		c= !isNaN(v)
		if(c==true)
		{
			
			ad=ad+v;
			
		}
	}
	if (ad>0) 
		{
			document.getElementById("tot_b").value="$"+ad;
		}
		else{document.getElementById("tot_b").value="";}
		//setTimeout(chk(),100);
}