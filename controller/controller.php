<?php


class Controller
{
    private $_f3; //router

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        // Display the home page
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function profile1()
    {
        //Reinitialize a session array
        $_SESSION = array();

        //Instantiate a Member or Premium Member obj
        if (isset($_POST['premium'])) {
            $user = new PremiumMember();
        } else {
            $user = new Member();
        }

        // For if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $user->setFname($_POST['fname']);
            $user->setLname($_POST['lname']);
            $user->setAge($_POST['age']);
            $user->setPhone($_POST['phone']);
            $user->setGender($_POST['gender']);


            //if first name is valid store data
            $userFName = $_POST['fname'];
            if (Validation::validName($userFName)) {
                $user->setFname($userFName);
            }
            //set an error if not valid
            else {
                $this->_f3->set('errors["fname"]', 'Please enter a valid name');
            }

            //if last name is valid store data
            $userLName = $_POST['lname'];
            if (Validation::validName($userLName)) {
                $user->setLname($userLName);
            }
            //set an error if not valid
            else {
                $this->_f3->set('errors["lname"]', 'Please enter a valid name');
            }

            //if age is valid store data
            $userAge = $_POST['age'];
            if (Validation::validAge($userAge)) {
                $user->setAge($userAge);
            }
            //set an error if not valid
            else {
                $this->_f3->set('errors["age"]', 'Please enter a valid age number
            between 18 - 118');
            }

            //if phone number is valid store data
            $userPhone = $_POST['phone'];
            if (Validation::validPhone($userPhone)) {
                $user->setPhone($userPhone);
            }
            //set an error if not valid
            else {
                $this->_f3->set('errors["phone"]', 'Please enter a valid phone number');
            }

            $_SESSION['user'] = $user;

            if (empty($this->_f3->get('errors'))) {
                header('location: profile2');
            }
        }

        //Get the data from the model
        $this->_f3->set('genders', DataLayer::getGender());

        //store the user input to the hive
        $this->_f3->set('user', $_POST['premium']);
        $this->_f3->set('userFName', $user->getFname());
        $this->_f3->set('userLName', $user->getLname());
        $this->_f3->set('userAge', $user->getAge());
        $this->_f3->set('userPhone', $user->getPhone());
        $this->_f3->set('userGender', $user->getGender());

        //display the personal information page
        $view = new Template();
        echo $view->render('views/personalinfo.html');
    }

    function profile2()
    {
        //Initialize variables to store user input
        $user = $_SESSION['user'];
        $user->setEmail("");
        $user->setState("");
        $user->setSeeking("");
        $user->setBio("");

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $userEmail = $_POST['email'];

            //if email is valid store data
            if (Validation::validEmail($userEmail)) {
                $user->setEmail($userEmail);
            }
            //set an error if not valid
            else {
                $this->_f3->set('errors["email"]', 'Please enter a valid email');
            }

            $user->setState($_POST['state']);
            $user->setBio($_POST['bio']);
            $user->setSeeking($_POST['seeking']);

            //$_SESSION['user'] = $user;

            if (empty($this->_f3->get('errors'))) {

                //Check to see if the user is a premium member
                if ($user instanceof PremiumMember) {
                    header('location: profile3');
                } else {
                    //Send user to the summary page if they are not a premium member
                    header('location: summary');
                }
            }
        }

        //Get the data from the model
        $this->_f3->set('seekedGenders', DataLayer::getSeeking());

        //store the user input to the hive
        $this->_f3->set('userEmail', $user->getEmail());
        $this->_f3->set('userState', $user->getState());
        $this->_f3->set('userSeeking', $user->getSeeking());
        $this->_f3->set('userBio', $user->getBio());

        // display the profile page
        $view = new Template();
        echo $view->render('views/profilepage.html');
    }

    function profile3()
    {

    }

}