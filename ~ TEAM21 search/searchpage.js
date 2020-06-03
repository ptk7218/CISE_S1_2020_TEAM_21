// JavaScript Document

function appendRow10(){
    //function makeTable(){
    
        var theTable =document.getElementById("tbl");
        //IE requires rows to be added to a tBody element
        //IE automatically creates a tBody element - delete it and then manually create
        if (theTable.firstChild != null){
            var badIEBody = theTable.childNodes[0];
            theTable.removeChild(badIEBody);
        }
        var tBody = document.createElement("TBODY");
        theTable.appendChild(tBody);
    
        var newRow = document.createElement("tr");
        var c1 = document.createElement("td");
        var v1 = document.createTextNode("6012");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        var c2 = document.createElement("td");
        var v2 = document.createTextNode("SOFTWARE ENGINEERING DAILY");
        c2.appendChild(v2);
        newRow.appendChild(c2);
        tBody.appendChild(newRow);
        
        c3 = document.createElement("td");
        v3 = document.createTextNode("https://softwareengineeringdaily.com/category/all-episodes/exclusive-content/articles/ ");
        c3.appendChild(v3);
        newRow.appendChild(c3);

        // article 2
        newRow = document.createElement("tr");
        c1 = document.createElement("td");
        v1 = document.createTextNode("7003");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        
        c2 = document.createElement("td");
        v2 = document.createTextNode("SET UP A SHORT FEEDBACK LOOP AS A SOLO CODER");
        c2.appendChild(v2);
        newRow.appendChild(c2);
    
        c3 = document.createElement("td");
        v3 = document.createTextNode("https://www.freecodecamp.org/news/how-to-set-up-a-short-feedback-loop-as-a-solo-coder-67709cba21e0/ ");
        c3.appendChild(v3);
        newRow.appendChild(c3);
        
        tBody.appendChild(newRow);

        // article 3
        newRow = document.createElement("tr");
        c1 = document.createElement("td");
        v1 = document.createTextNode("6055");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        
        c2 = document.createElement("td");
        v2 = document.createTextNode("SHOW TO WRITE A GOOD SOFTWARE DESIGN DOC");
        c2.appendChild(v2);
        newRow.appendChild(c2);
    
        c3 = document.createElement("td");
        v3 = document.createTextNode("  https://www.freecodecamp.org/news/how-to-write-a-good-software-design-document-66fcf019569c/ ");
        c3.appendChild(v3);
        newRow.appendChild(c3);
        
        tBody.appendChild(newRow);

        // article 4
        newRow = document.createElement("tr");
        c1 = document.createElement("td");
        v1 = document.createTextNode("3025");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        
        c2 = document.createElement("td");
        v2 = document.createTextNode("LEAN TESTING OR WHY UNIT TESTS ARE WORSE");
        c2.appendChild(v2);
        newRow.appendChild(c2);
    
        c3 = document.createElement("td");
        v3 = document.createTextNode(" https://blog.usejournal.com/lean-testing-or-why-unit-tests-are-worse-than-you-think-b6500139a009 ");
        c3.appendChild(v3);
        newRow.appendChild(c3);
        
        tBody.appendChild(newRow);

        // article 5
        newRow = document.createElement("tr");
        c1 = document.createElement("td");
        v1 = document.createTextNode("2085");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        
        c2 = document.createElement("td");
        v2 = document.createTextNode("SOFTWARE (ANDROID) DEVELOPER ACUMEN");
        c2.appendChild(v2);
        newRow.appendChild(c2);
    
        c3 = document.createElement("td");
        v3 = document.createTextNode(" https://medium.com/@elye.project/software-android-developer-acumen-4de3dda8a345 ");
        c3.appendChild(v3);
        newRow.appendChild(c3);
        
        tBody.appendChild(newRow);

        // article 6
        newRow = document.createElement("tr");
        c1 = document.createElement("td");
        v1 = document.createTextNode("5022");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        
        c2 = document.createElement("td");
        v2 = document.createTextNode("SOME MUSINGS ON HOW WE WRITE CODE");
        c2.appendChild(v2);
        newRow.appendChild(c2);
    
        c3 = document.createElement("td");
        v3 = document.createTextNode(" https://levelup.gitconnected.com/some-musings-on-how-we-write-code-bc0e4fb5cab2 ");
        c3.appendChild(v3);
        newRow.appendChild(c3);
        
        tBody.appendChild(newRow);
    
        // newRow = document.createElement("tr");
        // c1 = document.createElement("td");
        // v1 = document.createTextNode("7003");
        // c1.appendChild(v1);
        // newRow.appendChild(c1);
        // c2 = document.createElement("td");
        // v2 = document.createTextNode("Web Development");
        // c2.appendChild(v2);
        // newRow.appendChild(c2);
        // tBody.appendChild(newRow);
        
    
    }

function appendRow1(){
    //function makeTable(){
    
        var theTable =document.getElementById("tbl");
        //IE requires rows to be added to a tBody element
        //IE automatically creates a tBody element - delete it and then manually create
        if (theTable.firstChild != null){
            var badIEBody = theTable.childNodes[0];
            theTable.removeChild(badIEBody);
        }
        var tBody = document.createElement("TBODY");
        theTable.appendChild(tBody);
    
        var newRow = document.createElement("tr");
        var c1 = document.createElement("td");
        var v1 = document.createTextNode("6012");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        var c2 = document.createElement("td");
        var v2 = document.createTextNode("SOFTWARE ENGINEERING DAILY");
        c2.appendChild(v2);
        newRow.appendChild(c2);
        tBody.appendChild(newRow);
        
        c3 = document.createElement("td");
        v3 = document.createTextNode("https://softwareengineeringdaily.com/category/all-episodes/exclusive-content/articles/ ");
        c3.appendChild(v3);
        newRow.appendChild(c3)
        
    }
    "\n";
    
    // article 2:
     function appendRow2() {
        var theTable =document.getElementById("tbl");
        //IE requires rows to be added to a tBody element
        //IE automatically creates a tBody element - delete it and then manually create
        if (theTable.firstChild != null){
            var badIEBody = theTable.childNodes[0];
            theTable.removeChild(badIEBody);
        }
        var tBody = document.createElement("TBODY");
        theTable.appendChild(tBody);

        newRow = document.createElement("tr");
        c1 = document.createElement("td");
        v1 = document.createTextNode("7003");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        
        c2 = document.createElement("td");
        v2 = document.createTextNode("SET UP A SHORT FEEDBACK LOOP AS A SOLO CODER");
        c2.appendChild(v2);
        newRow.appendChild(c2);
    
        c3 = document.createElement("td");
        v3 = document.createTextNode("https://www.freecodecamp.org/news/how-to-set-up-a-short-feedback-loop-as-a-solo-coder-67709cba21e0/ ");
        c3.appendChild(v3);
        newRow.appendChild(c3);
        
        tBody.appendChild(newRow);
     }
    // article 3:
     function appendRow3() {
        var theTable =document.getElementById("tbl");
        //IE requires rows to be added to a tBody element
        //IE automatically creates a tBody element - delete it and then manually create
        if (theTable.firstChild != null){
            var badIEBody = theTable.childNodes[0];
            theTable.removeChild(badIEBody);
        }
        var tBody = document.createElement("TBODY");
        theTable.appendChild(tBody);

        newRow = document.createElement("tr");
        c1 = document.createElement("td");
        v1 = document.createTextNode("6055");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        
        c2 = document.createElement("td");
        v2 = document.createTextNode("SHOW TO WRITE A GOOD SOFTWARE DESIGN DOC");
        c2.appendChild(v2);
        newRow.appendChild(c2);
    
        c3 = document.createElement("td");
        v3 = document.createTextNode("  https://www.freecodecamp.org/news/how-to-write-a-good-software-design-document-66fcf019569c/ ");
        c3.appendChild(v3);
        newRow.appendChild(c3);
        
        tBody.appendChild(newRow);
     }
    // article 4:
     function appendRow4() {
        var theTable =document.getElementById("tbl");
        //IE requires rows to be added to a tBody element
        //IE automatically creates a tBody element - delete it and then manually create
        if (theTable.firstChild != null){
            var badIEBody = theTable.childNodes[0];
            theTable.removeChild(badIEBody);
        }
        var tBody = document.createElement("TBODY");
        theTable.appendChild(tBody);

        newRow = document.createElement("tr");
        c1 = document.createElement("td");
        v1 = document.createTextNode("3025");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        
        c2 = document.createElement("td");
        v2 = document.createTextNode("LEAN TESTING OR WHY UNIT TESTS ARE WORSE");
        c2.appendChild(v2);
        newRow.appendChild(c2);
    
        c3 = document.createElement("td");
        v3 = document.createTextNode(" https://blog.usejournal.com/lean-testing-or-why-unit-tests-are-worse-than-you-think-b6500139a009 ");
        c3.appendChild(v3);
        newRow.appendChild(c3);
        
        tBody.appendChild(newRow);
     }
    // article 5:
     function appendRow5() {
        var theTable =document.getElementById("tbl");
        //IE requires rows to be added to a tBody element
        //IE automatically creates a tBody element - delete it and then manually create
        if (theTable.firstChild != null){
            var badIEBody = theTable.childNodes[0];
            theTable.removeChild(badIEBody);
        }
        var tBody = document.createElement("TBODY");
        theTable.appendChild(tBody);

        newRow = document.createElement("tr");
        c1 = document.createElement("td");
        v1 = document.createTextNode("2085");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        
        c2 = document.createElement("td");
        v2 = document.createTextNode("SOFTWARE (ANDROID) DEVELOPER ACUMEN");
        c2.appendChild(v2);
        newRow.appendChild(c2);
    
        c3 = document.createElement("td");
        v3 = document.createTextNode(" https://medium.com/@elye.project/software-android-developer-acumen-4de3dda8a345 ");
        c3.appendChild(v3);
        newRow.appendChild(c3);
        
        tBody.appendChild(newRow);
     }
    // article 6:
     function appendRow6() {
        var theTable =document.getElementById("tbl");
        //IE requires rows to be added to a tBody element
        //IE automatically creates a tBody element - delete it and then manually create
        if (theTable.firstChild != null){
            var badIEBody = theTable.childNodes[0];
            theTable.removeChild(badIEBody);
        }
        var tBody = document.createElement("TBODY");
        theTable.appendChild(tBody);

        newRow = document.createElement("tr");
        c1 = document.createElement("td");
        v1 = document.createTextNode("5022");
        c1.appendChild(v1);
        newRow.appendChild(c1);
        
        c2 = document.createElement("td");
        v2 = document.createTextNode("SOME MUSINGS ON HOW WE WRITE CODE");
        c2.appendChild(v2);
        newRow.appendChild(c2);
    
        c3 = document.createElement("td");
        v3 = document.createTextNode(" https://levelup.gitconnected.com/some-musings-on-how-we-write-code-bc0e4fb5cab2 ");
        c3.appendChild(v3);
        newRow.appendChild(c3);
        
        tBody.appendChild(newRow);
     }
    
    