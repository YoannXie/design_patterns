<html>
<head>
	<title>观察者</title>
</head>
<body>
	
	<p>
		场景：单条件 变化使得 多个内容 变化，而且内容可能会扩增<br>
		面向过程思路：判断 单条件 的变化，分别设定 内容 的值，扩增时需要在同一个if else修改<br>
		面向对象思路：分别定义 单条件 和 变化内容 对象的“职责”，扩增时可以在相对独立的区域修改，解耦
	</p>

	<select name="" id="select">
		<option value="1">变化1</option>
		<option value="2">变化2</option>
	</select>

	<div id="one">内容1</div>
	<div id="two">内容2</div>
	<div id="three">内容3</div>
</body>
<script>
	var select = document.getElementById('select')
	select.observers = {}
	select.attachObserver = function(key,value){
		this.observers[key] = value
	}
	select.detachObserver = function(key){
		delete this.observers[key]
	}
	select.onchange = function(){
		for(var key in this.observers){
			this.observers[key].update(this)
		}
	}


	var one = document.getElementById('one')
	one.update = function(select){
		if(select.value == '1'){
			this.innerHTML = '内容1变化1'
		}else if(select.value == '2'){
			this.innerHTML = '内容1变化2'
		}
	}

	var two = document.getElementById('two')
	two.update = function(select){
		if(select.value == '1'){
			this.innerHTML = '内容2变化1'
		}else if(select.value == '2'){
			this.innerHTML = '内容2变化2'
		}
	}

	var three = document.getElementById('three')
	three.update = function(select){
		if(select.value == '1'){
			this.innerHTML = '内容3变化1'
		}else if(select.value == '2'){
			this.innerHTML = '内容3变化2'
		}
	}
	

	select.attachObserver('one',one)
	select.attachObserver('two',two)
	select.attachObserver('three',three)

</script>
</html>