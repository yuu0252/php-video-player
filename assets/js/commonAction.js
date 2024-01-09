window.onload = function () {
  const onClickSideBtn = () => {
    const main = document.getElementById('mainSectionContainer');
    const nav = document.getElementById('sideNavContainer');
    if (nav.style.display === 'none') {
      nav.style.display = 'flex';
      main.style.paddingLeft = '240px';
    } else {
      nav.style.display = 'none';
      main.style.paddingLeft = '0';
    }
  };
  const btn = document.getElementById('navShowHide');
  btn.addEventListener('click', onClickSideBtn);
};
