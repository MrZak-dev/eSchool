
    $(document).ready(function() {
      // $('#fullpage').fullpage({
      //     anchors:['firstPage', 'secondPage']
      //   });
      });
    // Variables


    // Full Blue Section
    var clippedLeftDiv = document.getElementById('left');
    var clippedRightDiv = document.getElementById('right');
    var rightSectionImage = document.getElementById('right_image');
    var leftSectionImage = document.getElementById('left_image');

    function fullBlueSection() {
      clippedRightDiv.style.zIndex="-1";
      rightSectionImage.style.display="none";
      clippedLeftDiv.style.clipPath = "polygon(0 0,100% 0,100% 100%,0 100%)";
      leftSectionImage.style.clipPath = "polygon(0 0,100% 0,100% 100%,0 100%)";
    }


    // Full orange section
    function fullOrangeSection() {
      clippedLeftDiv.style.zIndex="-1"
      leftSectionImage.style.display="none";
      clippedRightDiv.style.clipPath="polygon(100% 0, 0 0, 0 100%, 100% 100%)";
      rightSectionImage.style.clipPath = "polygon(100% 0, 0 0, 0 100%, 100% 100%)";

    }


    //Left section close button function
    function leftCloseBtn(){
      clippedRightDiv.style.zIndex="initial";
      rightSectionImage.style.display="initial";
      clippedLeftDiv.style.clipPath = "polygon(0 0, 47% 0, 53% 100%, 0 100%)";
      leftSectionImage.style.clipPath = "polygon(0 0, 47% 0, 53% 100%, 0 100%)";

    }

    //Left section close button function
    function rightCloseBtn(){
      clippedLeftDiv.style.zIndex="initial";
      leftSectionImage.style.display="initial";
      clippedRightDiv.style.clipPath="polygon(100% 0, 47% 0, 53% 100%, 100% 100%)";
      rightSectionImage.style.clipPath = "polygon(100% 0, 47% 0, 53% 100%, 100% 100%)";

    }


    // Form Validation

    // Form VAlidation Variables


    function formValidation() {
      var firstName = document.forms["sign_up_forms"]["first_name"];
      var lastName = document.forms["sign_up_forms"]["last_name"];

      // First Name Last Name Validation
      if (firstName.value == "" || lastName.value == "") {
        if (firstName.value == "") {
          firstName.style.borderColor = "#ff0000";
          lastName.style.borderColor = "#ffffff";
        }else {
          firstName.style.borderColor = "#ffffff";
          lastName.style.borderColor = "#ff0000";
        }
        return false;
      }else {
        return true;
      }
    }
