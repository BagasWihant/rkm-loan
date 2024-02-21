// 1. horizontal wizard
"use strict";
var currentTab = 0;
showTab(currentTab);
function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == x.length - 1) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // fixStepIndicator(n);
  stepindicator(n);
}
function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  console.log('AA');
  if (currentTab >= x.length) {
    console.log('KKKKS');
    $(".loader-wrapper").show();  
    var form = document.getElementById("regForm")
    form.submit();
    return false;
  }
  showTab(currentTab);
}
function validateForm() {
  var x,
    y,
    i,
    valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].querySelectorAll("input,textarea,select");
  y.forEach((element) => {
    element.classList.remove('invalid');
  });
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {

      if (y[i].classList.contains("canbeskip")) {
        continue
      }

      y[i].className += " invalid";
      valid = false;
    }

  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;
}
function stepindicator(currentStep) {
  var stepper = document.getElementById("stepper1");
  var steps = stepper.getElementsByClassName("step");
  currentStep = currentStep + 1;
  Array.from(steps).forEach((step, index) => {
    let stepNum = index + 1;
    let stepLength = steps.length;
    if (stepNum === currentStep && currentStep < stepLength) {
      addClass(step, "editing");
    } else {
      removeClass(step, "editing");
    }
    if (stepNum < currentStep && currentStep < stepLength) {
      addClass(step, "done");
      addClass(step, "active");
      removeClass(step, "editing");
    } else {
      removeClass(step, "done");
    }
    if (currentStep == stepLength - 1) {
      document.getElementById("nextBtn").textContent = "Preview";
    }
    if (currentStep > stepLength - 1) {
      document.getElementById("nextBtn").textContent = "Submit";
      addClass(step, "done");
      addClass(step, "active");
      removeClass(step, "editing");

      if (stepNum == stepLength) {
        var formData = new FormData(document.getElementById("regForm"))
        formPreview(formData)
      }
    }
  });
}
function formPreview(data) {
  var jk, jb, jr, sn
  $("#preview_nama").text(data.get('nama'))
  $("#preview_namaIbu").text(data.get('nama_ibu'))
  $("#preview_noktp").text(data.get('no_ktp'))
  $("#preview_npwp").text(data.get('npwp'))
  $("#preview_tempat").text(data.get('tempat_lahir'))
  $("#preview_tgllhr").text(data.get('tanggal_lahir'))
  $("#preview_alamat").text(data.get('alamat'))

  if (data.get('jenis_kelamin') === 'L') jk = 'Laki-Laki';
  else jk = 'Perempuan'
  $("#preview_jk").text(jk)

  if (data.get('status_nikah') === '1') sn = 'Lajang';
  else if (data.get('status_nikah') === '2') sn = 'Menikah';
  else sn = 'Duda/Janda'
  $("#preview_status").text(sn)

  $("#preview_hp").text(data.get('no_hp'))

  if (data.get('preview_bunga') === '1') jb = 'Flat';
  else jb = 'Anuitas'
  $("#preview_bunga").text(jb)
  $("#preview_jangka").text(data.get('jangka_waktu'))
  $("#preview_plafon").text(data.get('plafon'))


  if (data.get('jenis_relasi') === '1') jr = 'Orang Tua';
  else jr = 'Suami / Istri'
  $("#preview_hubungan").text(jr)
  $("#preview_hp_rel").text(data.get('no_hp_relasi'))
  $("#preview_namarel").text(data.get('nama_relasi'))
  $("#preview_alamat_rel").text(data.get('alamat_relasi'))

  if (data.get('jenis_nasabah') === '1') {
    $("#keluargatipe").show();
    $("#sahabattipe").hide();
    $('#preview_kodeKar').text(data.get('kode_kar'))
    $('#preview_norekkel').text(data.get('norek_kel'))
    $('#preview_namaLengkel').text(data.get('nama_kel'))
  } else if (data.get('jenis_nasabah') === '2') {
    $("#sahabattipe").show();
    $("#keluargatipe").hide();
    $('#preview_cno').text(data.get('cno'))
    $('#preview_namaLengshbt').text(data.get('nama_shbt'))
    $('#preview_norekshbt').text(data.get('norek_shbt'))
    $('#preview_namanorekshbt').text(data.get('nama_norek'))
    $('#preview_alamatshbt').text(data.get('alamat_shbt'))
  }
}
function fixStepIndicator(n) {
  var i,
    x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}

// 2. Numbering wizard
var form = document.getElementById("msform");
var fieldsets = form.querySelectorAll("form");
var currentStep = 0;
var numSteps = 5;

for (var i = 1; i < fieldsets.length; i++) {
  fieldsets[i].style.display = "none";
}

function nextStep() {
  document.getElementById("backbtn").disabled = false;
  currentStep++;
  if (currentStep > numSteps) {
    currentStep = 1;
  }
  var stepper = document.getElementById("stepper1");
  var steps = stepper.getElementsByClassName("step");

  Array.from(steps).forEach((step, index) => {
    let stepNum = index + 1;
    let stepLength = steps.length;
    if (stepNum === currentStep && currentStep < stepLength) {
      addClass(step, "editing");
      fieldsets[currentStep].style.display = "flex";
    } else {
      removeClass(step, "editing");
    }
    if (stepNum <= currentStep && currentStep < stepLength) {
      addClass(step, "done");
      addClass(step, "active");
      removeClass(step, "editing");
      fieldsets[currentStep - 1].style.display = "none";
    } else {
      removeClass(step, "done");
    }
    if (currentStep == stepLength - 1) {
      document.getElementById("nextbtn").textContent = "Finish";
    }
    if (currentStep > stepLength - 1) {
      document.getElementById("nextbtn").textContent = "Finish";
      addClass(step, "done");
      addClass(step, "active");
      removeClass(step, "editing");
      document.getElementById("nextbtn").disabled = true;
    }
  });
}

function backStep() {
  currentStep--;
  var stepper = document.getElementById("stepper1");
  var steps = stepper.getElementsByClassName("step");
  let stepLength = steps.length;
  document.getElementById("nextbtn").textContent = "Next";
  document.getElementById("nextbtn").disabled = false;
  if (currentStep < stepLength - 1) {
    document.getElementById("backbtn").disabled = false;
    fieldsets[currentStep + 1].style.display = "none";
    fieldsets[currentStep].style.display = "flex";
    removeClass(steps[currentStep], "done");
    removeClass(steps[currentStep], "active");
    if (currentStep == 0) {
      document.getElementById("backbtn").disabled = true;
    }
  } else {
    removeClass(steps[currentStep], "done");
    removeClass(steps[currentStep], "active");
  }
}

// function prevStep(){
//   fieldsets[currentStep].style.display = "none";
//   currentStep--;
//   fieldsets[currentStep].style.display = "block";
// }

/* get, set class, see https://ultimatecourses.com/blog/javascript-hasclass-addclass-removeclass-toggleclass */

function hasClass(elem, className) {
  return new RegExp(" " + className + " ").test(" " + elem.className + " ");
}

function addClass(elem, className) {
  if (!hasClass(elem, className)) {
    elem.className += " " + className;
  }
}

function removeClass(elem, className) {
  var newClass = " " + elem.className.replace(/[\t\r\n]/g, " ") + " ";
  if (hasClass(elem, className)) {
    while (newClass.indexOf(" " + className + " ") >= 0) {
      newClass = newClass.replace(" " + className + " ", " ");
    }
    elem.className = newClass.replace(/^\s+|\s+$/g, "");
  }
}
