function get(id)
{
	return document.getElementById(id);
}
function searchCategory(e){
	if(e.value=="")
	{
		get("suggesstion").innerHTML="";
		return;
	}
	var xhr=new XMLHttpRequest();
	xhr.open("GET","search_category.php?key="+e.value,true);
	xhr.onreadystatechange=function()
	{
		if(this.readyState==4 && this.Status==200)
		{
			get("suggesstion").innerHTML=this.responseText;
		}
	};
	xhr.send();

}