<!DOCTYPE html>
<html>
<head>
	<title>Part 3 (Array)</title>
</head>
<body>
	<center>
		<h1>Part 3 JS Day 3</h1>
		<hr />
		<h1 id="hist"></h1>
		
	</center>

<script type="text/javascript">
	var hist = document.getElementById('hist');

	/*var arr = new Array();
	console.log(arr);
	console.log(typeof(arr));
	console.log(arr.length)*/

	//var arr = new Array(5);
	//console.log(arr);
	//console.log(arr.length)	
	//hist.innerHTML = arr;

	/*var arr = new Array("5");
	console.log(arr);
	console.log(arr.length)	
	hist.innerHTML = arr;*/

	/*var arr = new Array(-4);
	console.log(arr);
	console.log(arr.length)	
	hist.innerHTML = arr;*/ // error

	/*var arr = new Array(4.4);
	console.log(arr);
	console.log(arr.length)	
	hist.innerHTML = arr;*/ // error

	/*var arr = new Array(05);
	console.log(arr);
	console.log(arr.length)	
	hist.innerHTML = arr;*/

	/*var arr = new Array("abc");
	console.log(arr);
	console.log(arr.length)	
	hist.innerHTML = arr;*/

	/*var arr = new Array(011);
	console.log(arr);
	console.log(arr.length)	
	hist.innerHTML = arr;*/

	//var arr = new Array(10,11);
	/*var arr = new Array(10.3,11);
	console.log(arr);
	console.log(arr.length)	
	hist.innerHTML = arr;*/

	/*var arr = new Array(3);
		arr[0] = 'a';
		arr[1] = 'b';
		arr[2] = 'c';
		//arr["2"] = 'd';
		//arr["02"] = 'd';
		//arr[4] = 'd';
		//arr[10] = 'd'
		//arr['abc'] = "abc";
		//arr[-5] = "abc";
		//arr[5.5] = "abc";
	console.log(arr);
	console.log(arr.length)	
	hist.innerHTML = arr;*/

	/*arr = new Array("a","b","c",1,2,3,4,"x","y","z",8,9,10);
	arr = ["a","b","c",1,2,3,4,"x","y","z",8,9,10];	

	console.log(arr);
	console.log(arr.length)	
	hist.innerHTML = arr;*/

	/*arr = new Array("a","b","c",1,2,3,4,"x","y","z",8,9,10);
	console.log(arr);
	console.log(arr.length)	
	hist.innerHTML = arr[8];*/

	/*arr = [10]
	console.log(arr);
	console.log(arr.length)	
	hist.innerHTML = arr;*/

	//arr = new Array("a","b","c",1,2,3,4,"x","y","z",8,9,10);
	/*arr = ["a","b","c",1,2,3,4,"x","y","z",8,9,10];

	for(i = 0; i<arr.length; i++)
	{
		document.write("index = " + i + " value = " + arr[i]);
		document.write("<br />");
	}*/

	/*var arr = new Array(
		Array(19184,"Asif"),
		Array(19269,"M.Umar"),
		);

	var arr = [
		[19184,"Asif"],
		[19269,"M.Umar"],
		];

	hist.innerHTML = arr[0][1]; */


	/*var arr = new Array(
		Array(19184,"Asif","abc"=>'aa'),
		Array(19269,"M.Umar"),
		);*/

	/*var arr = new Array(
		Array(19184,"Asif"),
		Array(19269,"M.Umar"),
	);*/

	/*var arr = [
		[19184,"Asif"],
		[19269,"M.Umar"],
		[19888,"Adeel"],
		];
	for(i = 0; i<arr.length; i++)
	{
		for(j = 0; j<arr[i].length; j++)
		{
			document.write("index["+i+"]["+j+"] ||  value = " + arr[i][j]);
			document.write("<br />");
		}
		
	}*/

	/*var arr = new Array(
		Array(10),
		Array(11),
	)
	console.log(arr);*/

	/*arr = new Array();
	arr[0] = 1
	arr[1] = 2;
	arr[true] = true;
	arr[false] = false;
	arr[""] = "";
	arr[null] = null;
	arr["abc"] = "abc";
	arr[2] = "a";
	arr[3] = "b";
	arr[8] = "c";
	console.log(arr);
	for(i = 0; i<arr.length; i++)
	{
		document.write("index = " + i + " value = " + arr[i]);
		document.write("<br />");
	}*/

	/*arr = new Array();
	arr[0] = 1
	arr[1] = 2;
	arr[true] = true;
	arr[false] = false;
	arr[""] = "";
	arr[null] = null;
	arr["abc"] = "abc";
	arr[2] = "a";
	arr[3] = "b";
	for(index in arr)
	{
		document.write("index = " + index + " value = " + arr[index]);
		document.write("<br />");
	}*/

	/*arr =  Array(1,2,3,4);
	arr["abc"] = "abc";
	arr[10] = "A";
	arr.forEach(function(value,index){
		document.write("index = " + index + " value = " + value);
		document.write("<br />");
	});

	for(i = 0; i<arr.length; i++)
	{
		document.write("index = " + i + " value = " + arr[i]);
		document.write("<br />");
	}*/

	arr = [1,2,3,4];
	/*arr.forEach(function(value,index){
		document.write("index = " + index + " value = " + value);
		document.write("<br />");
	});*/

	/*arr.forEach(getValueIndexFromArr);

	function getValueIndexFromArr(value,index)
	{
		document.write("index = " + index + " value = " + value);
		document.write("<br />");
	}*/

	/*function getValueIndexFromArr(value,index)
	{
		document.write("index = " + index + " value = " + value);
		document.write("<br />");
	}*/

	/*var a = 1;
	function inc(){
		if(a == 3) return "";
		document.write(a);
		document.write("<br />");
		

	}
	for(i=1; i<=5; i++)
	{
		inc();
		a++;
	}*/

	/*arr = [1,2,3,4,5,6,7];
	arr.forEach(function(value,index){
		if(index == 2) return "";
		document.write("index = " + index + " value = " + value);
		document.write("<br />");
	});*/


	/* Array functions*/

	//arr = new Array(1,2,"a","b");
	//var two = arr.concat("c");
	//var two = arr.concat([1,2,3]);
	//console.log(two);
	//hist.innerHTML = two;

	//arr = new Array(1,2,"a","b");
	//two = arr.join()
	//two = arr.join(" ")
	//console.log(two);
	//console.log(typeof(two))
	//hist.innerHTML = two;

	/*arr = new Array(1,2,"a","b");
	two = arr.reverse();
	console.log(two);
	hist.innerHTML = two;*/
	/*arr = new Array(1,2,"a","b");
	hist.innerHTML = two[-1];*/

	//arr = new Array(3,4,5,1,2,8,1,1,3,5,'a',"A");
	/*arr = new Array(3,2,5,1,20,8,1,11,3,55,'a',"A");
	two = arr.sort();
	console.log(two);
	hist.innerHTML = two;*/

	/*arr = new Array('a','b','c',1,2,3);
	arr[3] = 'd';
	//two = arr.push('d');
	//two = arr.push(4);
	//arr.pop();
	//arr.pop('c');
	console.log(arr);
	hist.innerHTML = arr;*/

	/*arr = new Array('a','b','c',1,2,3,'d',4,'e',5);
	console.log(arr);
	//two = arr.slice(2);
	//two = arr.slice(2,6);
	// two = arr.slice(-5);
	//two = arr.slice(-5,3);
	//two = arr.slice(-5,10);
	//two = arr.slice(-5,-3);
	//two = arr.slice(-3,-5);
	//two = arr.slice(3,-5);
	//console.log(two);
	hist.innerHTML = two;*/






	










	

</script>

</body>
</html>