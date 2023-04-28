
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DropDown Menu</title>
</head>
<style>
    body
{
  font-family: Open sans, Helvetica;
  background: #111;
  color: white;
  font-size: 16px;
}

h1
{
  font-weight: lighter;
}

small
{
  color: firebrick;
}

div.checkbox_select
{
  width: 200px;
}

.checkbox_select_anchor
{
  display: block;
  background: firebrick;
  color: white;
  cursor: pointer;
  padding: 10px 5px 5px;
  position: relative;
}

.checkbox_select_anchor:after
{
  width: 0; 
	height: 0; 
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	border-top: 10px solid darkred;
  content: "";
  position: absolute;
  right: 10px;
  top: 15px;
}

.expanded .checkbox_select_anchor:after
{
	border-top: 0;
	border-bottom: 10px solid firebrick;
}


.checkbox_select_anchor:hover
{
  background: #FF3030 !important;
}

.expanded .checkbox_select_anchor
{
    background: #7C1818;
}

div.checkbox_select .select_input
{
    width: 100%;
    cursor: pointer;
}

.checkbox_select_dropdown
{
    display: none;
    background: whitesmoke;
}

.checkbox_select_dropdown.show
{
    display: block;
}

.checkbox_select_dropdown ul
{
    max-height: 150px;
    overflow-y: scroll;
    overflow-x: hidden;
    padding: 0;
  margin: 0;
      border: 1px solid #999;
  border-top: 0;
  border-bottom: 0;
}
.checkbox_select_dropdown ul li
{
    list-style: none;
    position: relative;
    color: #666;
}
.checkbox_select_dropdown ul li label
{
  position: relative;
      padding: 10px 5px 5px 40px;
     display: block;
  cursor: pointer;
}
.checkbox_select_dropdown ul li label:hover
{
  background: #cbcbcb;
  color: white;
}
.checkbox_select_dropdown ul li input:checked + label
{
  background: #bbb;
  color: white;
  text-shadow: 0px 1px 1px rgba(150, 150, 150, 1);
}
.checkbox_select_dropdown ul li input
{
  position: absolute;
  left:0;
  z-index:1;
  display: inline-block;
  height: 100%;
  width: 30px;
}
.checkbox_select_search
{
    width: 200px;
    padding: 10px 5px 5px;
    border: 1px solid #999;
      border-top: 0;
    -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
}

.checkbox_select_submit
{
    background: #00A600;
    color: white;
    padding: 10px 5px 5px;
    border: 0;
    width: 100%;
    font-size: 14px;
    cursor: pointer;
}

.hide
{
    display: none;
}


</style>
<body>
<h1>Checkbox select</h1>

<form id="make_checkbox_select">

  <select name="make">
      <option data-count="2" value="Alfa Romeo">Alfa Romeo</option>
      <option data-count="23" value="Audi">Audi</option>
      <option data-count="433" value="BMW">BMW</option>
      <option data-count="45" value="Chrysler">Chrysler</option>
      <option data-count="476" value="Citroen">Citroen</option>
      <option data-count="78" value="Dodge">Dodge</option>
      <option data-count="123" value="Fiat">Fiat</option>
      <option data-count="32" value="Ford">Ford</option>
      <option data-count="3" value="Honda">Honda</option>
      <option data-count="342" value="Hyundai">Hyundai</option>
      <option data-count="45" value="Isuzu">Isuzu</option>
      <option data-count="653" value="Jaguar">Jaguar</option>
      <option data-count="3" value="Jeep">Jeep</option>
      <option data-count="23" value="Kia">Kia</option>
      <option data-count="5656" value="Lamborghini">Lamborghini</option>
      <option data-count="2133" value="Land Rover">Land Rover</option>
      <option data-count="2" value="Lexus">Lexus</option>
      <option data-count="43" value="Lotus">Lotus</option>
      <option data-count="54" value="Maserati">Maserati</option>
      <option data-count="5" value="Mazda">Mazda</option>
      <option data-count="1" value="Mercedes-Benz">Mercedes-Benz</option>
      <option data-count="34" value="Mini">Mini</option>
      <option data-count="23" value="Mitsubishi">Mitsubishi</option>
      <option data-count="56" value="Nissan">Nissan</option>
      <option data-count="98" value="Peugeot">Peugeot</option>
      <option data-count="210" value="Porsche">Porsche</option>
      <option data-count="3" value="Renault">Renault</option>
      <option data-count="76" value="Saab">Saab</option>
      <option data-count="45" value="Skoda">Skoda</option>
      <option data-count="3" value="smart">smart</option>
      <option data-count="23" value="Subaru">Subaru</option>
      <option data-count="7" value="Suzuki">Suzuki</option>
      <option data-count="45" value="Toyota">Toyota</option>
      <option data-count="23" value="Volkswagen">Volkswagen</option>
      <option data-count="6" value="Volvo">Volvo</option>
  </select>
  
  <input type="submit" />
  
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<script>

	$(function()
	{
		var mySelectCheckbox = new checkbox_select(
		{
			selector : "#make_checkbox_select",
            selected_translation : "selectat",
            all_translation : "Toate marcile",
            not_found : "Nici unul gasit",

			// Event during initialization
			onApply : function(e)
			{
                alert("Custom Event: " + e.selected);
			}
		});
  
	});
		
</script>
<script type="text/javascript" src="codes.js"></script>
</body>
</html>
