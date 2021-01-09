/*function hidey() {}

let student2 = document.getElementsByClassName("student2");

let performanceType = document.getElementById("performance");
if (performanceType === "duet") {
    student2.classList.toggle("hide");
}
*/

class Student {
    constructor(perfType, fname, lname, studentId, skill, instrument, location, room, time) {
        this.perfType = perfType;
        this.fname = fname;
        this.lname = lname;
        this.studentId = studentId;
        this.skill = skill;
        this.instrument = instrument;
        this.location = location;
        this.room = room;
        this.time = time;
        
    }

}

function hidey() {
    let student2 = document.getElementsByClassName("student2");

    var radios = document.getElementsByName('performance');

    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked && radios[i].value == "Duet") {
            student2[0].classList.remove("hide");
        } 
        if (radios[i].checked && radios[i].value != "Duet") {
            student2[0].classList.add("hide");
        }
    }
}