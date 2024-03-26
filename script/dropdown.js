const dropdownButtonMaterial = document.getElementById('materiel');
const dropdownButtonEconomique = document.getElementById('economique');
const dropdownMenuMaterial = document.querySelector('#materiel .dropdown-menu');
const dropdownMenuEconomique = document.querySelector('#economique .dropdown-menu');

function toggleMaterial() {
  if (dropdownButtonMaterial.classList.contains('active')) {
    dropdownButtonMaterial.classList.toggle('active');
    dropdownMenuMaterial.classList.toggle('open');
  } else {
    dropdownButtonMaterial.classList.toggle('active');
    dropdownMenuMaterial.classList.toggle('open');
  }
}

function toggleEconomy() {
  if (dropdownButtonEconomique.classList.contains('active')) {
    dropdownButtonEconomique.classList.toggle('active');
    dropdownMenuEconomique.classList.toggle('open');
  } else {
    dropdownButtonEconomique.classList.toggle('active');
    dropdownMenuEconomique.classList.toggle('open');
  }
}

function closeDropdown() {
  dropdownButtonMaterial.classList.remove('active');
  dropdownButtonEconomique.classList.remove('active');
  dropdownMenuEconomique.classList.remove('open');
  dropdownMenuMaterial.classList.remove('open');
}

dropdownButtonMaterial.addEventListener('click', toggleMaterial);
dropdownButtonEconomique.addEventListener('click', toggleEconomy);
