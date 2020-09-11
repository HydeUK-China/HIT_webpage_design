function addmore_edu() {
    var levelinfo = document.getElementById("edu-info1").value;
    var degreeinfo = document.getElementById("edu-info2").value;
    var startdateinfo = document.getElementById("edu-info3").value;
    var enddateinfo = document.getElementById("edu-info4").value;
    var institutioninfo = document.getElementById("edu-info5").value;


    var table = document.getElementsByTagName('table')[0];
    var newRow = table.insertRow(0);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);

    cell1.innerText = levelinfo;
    cell2.innerText = degreeinfo;
    cell3.innerText = startdateinfo;
    cell4.innerText = enddateinfo;
    cell5.innerText = institutioninfo;


}



function addmore_work() {
    var positioninfo = document.getElementById("work-info1").value;
    var startdateinfo = document.getElementById("work-info2").value;
    var enddateinfo = document.getElementById("work-info3").value;
    var countryinfo = document.getElementById("work-info4").value;
    var employerinfo = document.getElementById("work-info5").value;


    var table = document.getElementsByTagName('table')[1];
    var newRow = table.insertRow(0);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);

    cell1.innerHTML = positioninfo;
    cell2.innerHTML = startdateinfo;
    cell3.innerHTML = enddateinfo;
    cell4.innerHTML = countryinfo;
    cell5.innerHTML = employerinfo;
}

function addmore_project() {
    var timeinfo = document.getElementById("project-info1").value;
    var nasopinfo = document.getElementById("project-info2").value;
    var amountinfo = document.getElementById("project-info3").value;
    var nopinfo = document.getElementById("project-info4").value;
    var prinfo = document.getElementById("project-info5").value;


    var table = document.getElementsByTagName('table')[2];
    var newRow = table.insertRow(0);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);

    cell1.innerHTML = timeinfo;
    cell2.innerHTML = nasopinfo;
    cell3.innerHTML = amountinfo;
    cell4.innerHTML = nopinfo;
    cell5.innerHTML = prinfo;
}

function addmore_patent() {
    var startinfo = document.getElementById("patent-info1").value;
    var endinfo = document.getElementById("patent-info2").value;
    var pninfo = document.getElementById("patent-info3").value;
    var ptinfo = document.getElementById("patent-info4").value;
    var orginfo = document.getElementById("patent-info5").value;


    var table = document.getElementsByTagName('table')[3];
    var newRow = table.insertRow(0);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);

    cell1.innerHTML = startinfo;
    cell2.innerHTML = endinfo;
    cell3.innerHTML = pninfo;
    cell4.innerHTML = ptinfo;
    cell5.innerHTML = orginfo;
}
