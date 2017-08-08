/* Script for movies menu to expand and collapse */

var  slidedownTimer, slideupTimer, expanding = false, collapsing = false;

//expand movies menu
function expand() { 
	if (collapsing) {
		clearInterval(slideupTimer);
		collapsing = false;
	}
	slidedown(2);
}

//collapse movies menu
function collapse() { 
	if (expanding) {
		clearInterval(slidedownTimer);
		expanding = false;
	}
	slideup(2);	
}

//stop menu from collapsing
function stopCollapse() { 
	if (collapsing) {
		clearInterval(slideupTimer);
		collapsing = false;
		slidedown(2);
	} 
}

//movies menu expand animation
function slidedown(rate) {
	var dropdiv = document.getElementById('menuitems');
	var itemptr = document.getElementById('itempointer');
	var h = dropdiv.offsetHeight;
	var t = itemptr.offsetTop;

	itemptr.style.background = 'url("/site/images/body/mp_over.png") no-repeat scroll -1px top rgba(0, 0, 0, 0)';
	
	//gradually expand to certain height
	expanding = true;
	slidedownTimer = setInterval(function() { 
		if (h < 338) {
			h += rate;
			t += rate;
			dropdiv.style.height = h +'px';
			itemptr.style.top = t + 'px';
		}
		else { 
			clearInterval(slidedownTimer);
			expanding = false;
		}
	}, 1);
}

//movies menu collapse animation
function slideup(rate) {
	var dropdiv = document.getElementById('menuitems');
	var itemptr = document.getElementById('itempointer');
	var h = dropdiv.offsetHeight;
	var t = itemptr.offsetTop;
	
	//gradually collapse to 0 height
	collapsing = true;
	slideupTimer = setInterval(function () { 
		if (h > 0) {
			h -= rate;
			t -= rate;
			dropdiv.style.height = h + 'px';
			itemptr.style.top = t + 'px';
		}
		else { 	
			clearInterval(slideupTimer); 
			itemptr.style.background = 'url("/site/images/body/mp.png") no-repeat scroll -1px top rgba(0, 0, 0, 0)';
			collapsing = false;	
		}
	}, 1);
}	