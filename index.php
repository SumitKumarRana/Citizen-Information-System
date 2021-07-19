<?php
 require_once "configure.php";

     
     $query = "select * from register order by Citizen_ID desc limit 1";
     $result = mysqli_query($conn,$query);
     $row = mysqli_fetch_array($result);
     $lastid = $row['Citizen_ID'];
     if($lastid == " ")
     {
          $citizenid = "CITIZEN";
     }

     else

     {
     $citizenid =  substr($lastid, 7);
     $citizenid =  intval($citizenid);
     $citizenid =  "CITIZEN" . ($citizenid + 100);
     }

      
 if(isset($_POST['submit']))
 {

    $Citizen_ID = $_POST['Citizen_ID'];
    $First_Name = $_POST['First_Name'];
    $Middle_Name = $_POST['Middle_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Confirm_Password = $_POST['Confirm_Password'];
    $Date_of_Birth = $_POST['Date_of_Birth'];
    $Place_of_Birth = $_POST['Place_of_Birth'];
    $Phone_Number = $_POST['Phone_Number'];
    $Permanent_Address = $_POST['Permanent_Address'];
    $Pin_Code = $_POST['Pin_Code'];
    $Father_Citizen_ID = $_POST['Father_Citizen_ID'];
    $Mother_Citizen_ID = $_POST['Mother_Citizen_ID'];
    $Photo = $_POST['Photo'];
    $Gender = $_POST['Gender'];
    $Registration_No = $_POST['Registration_No'];
    $Student_Id = $_POST['Student_Id'];
    $Class_Id = $_POST['Class_Id'];
    $Student_Name = $_POST['Student_Name'];
    $Student_Roll_No = $_POST['Student_Roll_No'];
    $Matriculation_Board_ID = $_POST['Matriculation_Board_ID'];
    $Matriculation_Board_Name = $_POST['Matriculation_Board_Name'];
    $Matriculation_Percentage = $_POST['Matriculation_Percentage'];
    $Matriculation_Year_Of_Passing = $_POST['Matriculation_Year_Of_Passing'];
    $Intermediate_Board_ID = $_POST['Intermediate_Board_ID'];
    $Intermediate_Board_Name = $_POST['Intermediate_Board_Name'];
    $Intermediate_Percentage = $_POST['Intermediate_Percentage'];
    $Intermediate_Year_Of_Passing = $_POST['Intermediate_Year_Of_Passing'];
    $Under_Graduation_Board_ID = $_POST['Under_Graduation_Board_ID'];
    $Under_Graduation_Board_Name = $_POST['Under_Graduation_Board_Name'];
    $Under_Graduation_Percentage = $_POST['Under_Graduation_Percentage'];
    $Under_Graduation_Year_Of_Passing = $_POST['Under_Graduation_Year_Of_Passing'];
    $Post_Graduation_Board_ID = $_POST['Post_Graduation_Board_ID'];
    $Post_Graduation_Board_Name = $_POST['Post_Graduation_Board_Name'];
    $Post_Graduation_Percentage = $_POST['Post_Graduation_Percentage'];
    $Post_Graduation_Year_Of_Passing = $_POST['Post_Graduation_Year_Of_Passing'];
    $Employee_ID = $_POST['Employee_ID'];
    $Employee_Name = $_POST['Employee_Name'];
    $Company_ID = $_POST['Company_ID'];
    $Occupation_Type = $_POST['Occupation_Type'];
    $Date_Of_Joining = $_POST['Date_Of_Joining'];
    $Date_Of_Leave = $_POST['Date_Of_Leave'];
    $Last_Designation = $_POST['Last_Designation'];
    $Last_Salary = $_POST['Last_Salary'];
    $Yearly_Income = $_POST['Yearly_Income'];
    $Professional_Experience = $_POST['Professional_Experience'];
    $Spouse_Citizen_No = $_POST['Spouse_Citizen_No'];
    $Application_Date = $_POST['Application_Date'];
    $Registration_Date = $_POST['Registration_Date'];
    $Date_of_Marriage = $_POST['Date_of_Marriage'];
    $Registration_Office_ID = $_POST['Registration_Office_ID'];
    $Citizen_ID_of_Witness_1 = $_POST['Citizen_ID_of_Witness_1'];
    $Citizen_ID_of_Witness_2 = $_POST['Citizen_ID_of_Witness_2'];
    $Citizen_ID_of_Witness_3 = $_POST['Citizen_ID_of_Witness_3'];
    $Status = $_POST['Status'];
    $Hospital_ID = $_POST['Hospital_ID'];
    $Hospital_Name = $_POST['Hospital_Name'];
    $Hospital_Contact_Number = $_POST['Hospital_Contact_Number'];
    $Hospital_Address = $_POST['Hospital_Address'];
    $Symptoms = $_POST['Symptoms'];
    $Treatment_Undergone = $_POST['Treatment_Undergone'];
    $Hospitalization_Admission_Date = $_POST['Hospitalization_Admission_Date'];
    $Hospitalization_Release_Date = $_POST['Hospitalization_Release_Date'];
    $Slot_Allotment = $_POST['Slot_Allotment'];
    $Treatment_Given = $_POST['Treatment_Given'];
    $Test_Conducted = $_POST['Test_Conducted'];
    $Doctor_Supervised_ID = $_POST['Doctor_Supervised_ID'];
    $Doctor_Name = $_POST['Doctor_Name'];
    $Medicine = $_POST['Medicine'];


    $insertquery = "insert into register(Citizen_ID, First_Name, Middle_Name, Last_Name, Email, Password, Confirm_Password, Date_of_Birth, Place_of_Birth,
    Phone_Number, Permanent_Address, Pin_Code, Father_Citizen_ID, Mother_Citizen_ID, Photo, Gender, Registration_No,
    Student_Id, Class_Id, Student_Name, Student_Roll_No, Matriculation_Board_ID, Matriculation_Board_Name, Matriculation_Percentage,
    Matriculation_Year_Of_Passing, Intermediate_Board_ID ,Intermediate_Board_Name, Intermediate_Percentage, Intermediate_Year_Of_Passing,
    Under_Graduation_Board_ID, Under_Graduation_Board_Name, Under_Graduation_Percentage, Under_Graduation_Year_Of_Passing, Post_Graduation_Board_ID,
    Post_Graduation_Board_Name, Post_Graduation_Percentage, Post_Graduation_Year_Of_Passing, Employee_ID, Employee_Name, Company_ID, Occupation_Type,
    Date_Of_Joining, Date_Of_Leave, Last_Designation, Last_Salary, Yearly_Income, Professional_Experience, Spouse_Citizen_No, Application_Date,
    Registration_Date, Date_of_Marriage, Registration_Office_ID, Citizen_ID_of_Witness_1, Citizen_ID_of_Witness_2, Citizen_ID_of_Witness_3, Status,
    Hospital_ID, Hospital_Name, Hospital_Contact_Number, Hospital_Address, Symptoms, Treatment_Undergone, Hospitalization_Admission_Date,
    Hospitalization_Release_Date, Slot_Allotment, Treatment_Given, Test_Conducted, Doctor_Supervised_ID, Doctor_Name, Medicine)
    values
     ('$Citizen_ID','$First_Name','$Middle_Name','$Last_Name','$Email','$Password','$Confirm_Password','$Date_of_Birth','$Place_of_Birth',	
      '$Phone_Number','$Permanent_Address','$Pin_Code','$Father_Citizen_ID','$Mother_Citizen_ID','$Photo','$Gender','$Registration_No',
      '$Student_Id','$Class_Id','$Student_Name','$Student_Roll_No','$Matriculation_Board_ID','$Matriculation_Board_Name',
      '$Matriculation_Percentage','$Matriculation_Year_Of_Passing','$Intermediate_Board_ID','$Intermediate_Board_Name',
      '$Intermediate_Percentage','$Intermediate_Year_Of_Passing','$Under_Graduation_Board_ID','$Under_Graduation_Board_Name',
      '$Under_Graduation_Percentage','$Under_Graduation_Year_Of_Passing','$Post_Graduation_Board_ID','$Post_Graduation_Board_Name',
      '$Post_Graduation_Percentage','$Post_Graduation_Year_Of_Passing','$Employee_ID','$Employee_Name','$Company_ID','$Occupation_Type',
      '$Date_Of_Joining','$Date_Of_Leave','$Last_Designation','$Last_Salary','$Yearly_Income','$Professional_Experience','$Spouse_Citizen_No',
      '$Application_Date','$Registration_Date','$Date_of_Marriage','$Registration_Office_ID','$Citizen_ID_of_Witness_1',	
      '$Citizen_ID_of_Witness_2','$Citizen_ID_of_Witness_3','$Status','$Hospital_ID','$Hospital_Name','$Hospital_Contact_Number',
      '$Hospital_Address','$Symptoms','$Treatment_Undergone','$Hospitalization_Admission_Date','$Hospitalization_Release_Date','$Slot_Allotment',
      '$Treatment_Given','$Test_Conducted','$Doctor_Supervised_ID','$Doctor_Name','$Medicine') ";
      
    
      
     $res = mysqli_query($conn,$insertquery);

     if($res)
   {
     ?>
     <script>
          swal({
          title: "Good job!",
          text: "You clicked the button!",
          icon: "success",
          button: "Aww yiss!",
          });
     </script>
     <?php
     }
   

 }

?>





<!docype html>
 <html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Citizen Registration Form</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
  
            <div class="container">
                <h1>Citizen Personal Details</h1>


                <div class="progress-bar">

                    <div class="step">
                        <p>Step-1</p>
                        <div class="bullet">
                              <span>1</span>
                         </div>
                        <div class="check fas fa-check"> </div>
                    </div>

                    <div class="step">
                        <p>Step-2</p>
                        <div class="bullet"> 
                             <span>2</span> 
                         </div>
                        <div class="check fas fa-check"> </div>
                    </div>

                    <div class="step">
                        <p>Step-3</p>
                         <div class="bullet">
                              <span>3</span>
                         </div>
                        <div class="check fas fa-check"> </div>
                    </div>


                    <div class="step">
                        <p>Step-4</p>
                         <div class="bullet"> 
                          <span>4</span> 
                         </div>
                        <div class="check fas fa-check"> </div>
                    </div>


                    <div class="step">
                        <p>Step-5</p>
                        <div class="bullet"> 
                          <span>5</span> 
                        </div>
                        <div class="check fas fa-check"> </div>
                    </div>

                </div>
     


                <div class="form-outer">
                <form action="#" method="POST">
                
                <div class="page slidepage">
               <div class="title">Personal information</div>

                     
                     <div class="field">
                      <div class="label">Citizen ID</div>
                     <input type="text" name="Citizen_ID" id="Citizen_ID" value="<?php echo $citizenid ?>" >
                </div>

                <div class="field">
                      <div class="label">First Name</div>
                     <input type="text" name="First_Name">
                </div>


                <div class="field">
                      <div class="label">Middle Name</div>
                     <input type="text" name="Middle_Name">
                </div>


                <div class="field">
                      <div class="label">Last Name</div>
                     <input type="text" name="Last_Name">
                </div>


                <div class="field">
                      <div class="label">Email*</div>
                     <input type="email" name="Email">
                </div>

                <div class="field">
                      <div class="label">Password*</div>
                     <input type="Password" name="Password">
                </div>

                <div class="field">
                      <div class="label">Confirm Password*</div>
                     <input type="Password" name="Confirm_Password">
                </div>

                <div class="field">
                      <div class="label">Date of Birth*</div>
                     <input type="date" name="Date_of_Birth">
                </div>

                <div class="field">
                      <div class="label">Time of Birth*</div>
                     <input type="text" name="Time_of_Birth">
                </div>

                <div class="field">
                      <div class="label">Place of Birth*</div>
                     <input type="text" name="Place_of_Birth">
                </div>

                <div class="field">
                      <div class="label">Phone Number*</div>
                     <input type="number" name="Phone_Number">
                </div>


                <div class="field">
                      <div class="label">Permanent Address*</div>
                     <input type="address" name="Permanent_Address">
                </div>


                
                <div class="field">
                      <div class="label">Pin Code*</div>
                     <input type="pincode" name="Pin_Code">
                </div>


                <div class="field">
                      <div class="label">Father Citizen ID</div>
                     <input type="text" name="Father_Citizen_ID">
                </div>


                <div class="field">
                      <div class="label">Mother Citizen ID</div>
                     <input type="text" name="Mother_Citizen_ID">
                </div>

                <div class="field">
                      <div class="label">Photo</div>
                     <input type="file"  name="Photo">
                </div>

                <div class="field">
                <div class="label"  name="Gender" id="Gender"  value="Gender"> Gender </div>
                
                <select name="Gender">
                    <option value="Default">Select </option>    
                    <option value="Male">   Male   </option>
                    <option value="Female"> Female </option>
               </select>

                </div>



                    <div class="field">
                        <span class="help-block">*Required fields</span>
                    </div>

                <div class="field nextBtn">
                <button>Next</button>
                </div>
             </div>

                                                    <!-- Education Details -->

                <div class="page">
                    <div class="title">Education Details</div>

                     <div class="field">
                      <div class="label">Registration No</div>
                      <input type="text" name="Registration_No">
                    </div>



                <div class="field">
                      <div class="label">Student Id</div>
                     <input type="text" name="Student_Id">
                </div>
        
                <div class="field">
                      <div class="label">Class Id</div>
                     <input type="text" name="Class_Id">
                </div>

                <div class="field">
                      <div class="label">Student Name</div>
                     <input type="text" name="Student_Name">
                </div>

                <div class="field">
                      <div class="label">Student Roll No</div>
                     <input type="text" name="Student_Roll_No">
                </div>

                <div class="field">
                      <div class="label">Matriculation Board ID</div>
                     <input type="text" name="Matriculation_Board_ID">
                </div>

                <div class="field">
                      <div class="label">Matriculation Board Name</div>
                     <input type="text" name="Matriculation_Board_Name">
                </div>

                <div class="field">
                      <div class="label">Matriculation Percentage</div>
                     <input type="text" name="Matriculation_Percentage" placeholder="Enter 10 Percentage Ex-CGPA,%,GRADE">
                </div>

                <div class="field">
                      <div class="label">Matriculation Year Of Passing</div>
                     <input type="date" name="Matriculation_Year_Of_Passing">
                </div>


                <div class="field">
                      <div class="label">Intermediate Board ID</div>
                     <input type="text" name="Intermediate_Board_ID">
                </div>


                <div class="field">
                      <div class="label">Intermediate Board Name</div>
                     <input type="text" name="Intermediate_Board_Name">
                </div>

                <div class="field">
                      <div class="label">Intermediate Percentage</div>
                     <input type="text" name="Intermediate_Percentage" placeholder="Enter 10 Percentage Ex-CGPA,%,GRADE">
                </div>

                <div class="field">
                      <div class="label">Intermediate Year Of Passing</div>
                     <input type="date" name="Intermediate_Year_Of_Passing">
                </div>

                <div class="field">
                      <div class="label">Under Graduation Board ID</div>
                     <input type="text" name="Under_Graduation_Board_ID">
                </div>

                <div class="field">
                      <div class="label">Under Graduation Board Name</div>
                     <input type="text" name="Under_Graduation_Board_Name">
                </div>

                <div class="field">
                      <div class="label">Under Graduation Percentage</div>
                     <input type="text" name="Under_Graduation_Percentage" placeholder="Enter 10 Percentage Ex-CGPA,%,GRADE">
                </div>

                <div class="field">
                      <div class="label">Under Graduation Year Of Passing</div>
                     <input type="date" name="Under_Graduation_Year_Of_Passing">
                </div>


                <div class="field">
                      <div class="label">Post Graduation Board ID</div>
                     <input type="text" name="Post_Graduation_Board_ID">
                </div>


                <div class="field">
                      <div class="label">Post Graduation Board Name</div>
                     <input type="text" name="Post_Graduation_Board_Name">
                </div>

                <div class="field">
                      <div class="label">Post Graduation Percentage</div>
                     <input type="text" name="Post_Graduation_Percentage" placeholder="Enter Post Graduation Percentage Ex-CGPA,%,GRADE">
                </div>

                <div class="field">
                      <div class="label">Post Graduation Year Of Passing</div>
                     <input type="date" name="Post_Graduation_Year_Of_Passing">
                </div>

                <div class="field">
                <span class="help-block">*Required fields</span>
                 </div>

                 <div class="field btns">
                        <button class="prev-1 prev">Prevoius</button>
                        <button class="next-1 next">Next</button> 
                </div>

                </div>

                                                    <!-- Employment Details -->


                <div class="page">
                    <div class="title">Employment Details</div>

                     <div class="field">
                        <div class="label">Employee ID</div>
                        <input type="text" name="Employee_ID">
                     </div>

                <div class="field">
                      <div class="label">Employee Name</div>
                     <input type="text" name="Employee_Name">
                </div>

                <div class="field">
                      <div class="label">Company ID</div>
                     <input type="text" name="Company_ID">
                </div>

                <div class="field">
                      <div class="label">Occupation Type</div>
                     <input type="text" name="Occupation_Type">
                </div>

                <div class="field">
                      <div class="label">Date Of Joining</div>
                     <input type="date" name="Date_Of_Joining">
                </div>

                <div class="field">
                      <div class="label">Date Of Leave</div>
                     <input type="date" name="Date_Of_Leave">
                </div>

                <div class="field">
                      <div class="label">Last Designation</div>
                     <input type="text" name="Last_Designation">
                </div>

                <div class="field">
                      <div class="label">Last Salary</div>
                     <input type="number" name="Last_Salary">
                </div>

                <div class="field">
                      <div class="label">Yearly Income</div>
                     <input type="number" name="Yearly_Income">
                </div>

                <div class="field">
                      <div class="label">Professional Experience</div>
                     <input type="text" name="Professional_Experience">
                </div>

                <div class="field">
                    <span class="help-block">*Required fields</span>
                </div>

                <div class="field btns">
                        <button class="prev-2 prev">Prevoius</button>
                        <button class="next-2 next">Next</button> 
                </div>

                </div>

                                                    <!-- Marriage Details -->


                <div class="page">
                    <div class="title">Marriage Details</div>
                     
                     <div class="field">
                      <div class="label">Spouse Citizen No</div>
                      <input type="text" name="Spouse_Citizen_No">
                     </div>


                <div class="field">
                      <div class="label">Application Date</div>
                     <input type="date" name="Application_Date" placeholder="Enter Application Date (Ex 02-02-2012)">
                </div>

                <div class="field">
                      <div class="label">Registration Date</div>
                     <input type="date" name="Registration_Date" placeholder="Enter Registration Date (Ex 04-04-2014)">
                </div>

                <div class="field">
                      <div class="label">Date of Marriage</div>
                     <input type="date" name="Date_of_Marriage">
                </div>

                <div class="field">
                      <div class="label">Registration Office ID</div>
                     <input type="text" name="Registration_Office_ID">
                </div>


                <div class="field">
                      <div class="label">Citizen ID of Witness 1</div>
                     <input type="id" name="Citizen_ID_of_Witness_1">
                </div>

                <div class="field">
                      <div class="label">Citizen ID of Witness 2</div>
                     <input type="id" name="Citizen_ID_of_Witness_2">
                </div>

                <div class="field">
                      <div class="label">Citizen ID of Witness 3</div>
                     <input type="id" name="Citizen_ID_of_Witness_3">
                </div>

                <div class="field">
                      <div class="label">Status</div>
                     <input type="text" name="Status">
                </div>


                <div class="field">
                    <span class="help-block">*Required fields</span>
                </div>

                <div class="field btns">
                    <button class="prev-3 prev">Prevoius</button>
                    <button class="next-3 next">Next</button> 
                </div>


                </div>

                                                    <!-- Medical History -->

                <div class="page">
                    <div class="title">Medical History</div>

                     <div class="field">
                      <div class="label">Hospital ID</div>
                      <input type="id" name="Hospital_ID">
                     </div>

                <div class="field">
                      <div class="label">Hospital Name</div>
                     <input type="text" name="Hospital_Name">
                </div>


                <div class="field">
                      <div class="label">Hospital Contact Number</div>
                     <input type="number" name="Hospital_Contact_Number">
                </div>


                <div class="field">
                      <div class="label">Hospital Address</div>
                     <input type="text" name="Hospital_Address">
                </div>

                <div class="field">
                      <div class="label">Symptoms</div>
                     <input type="text" name="Symptoms">
                </div>

                <div class="field">
                      <div class="label">Treatment Undergone</div>
                     <input type="text" name="Treatment_Undergone">
                </div>

                <div class="field">
                      <div class="label">Hospitalization Admission Date</div>
                     <input type="date" name="Hospitalization_Admission_Date">
                </div>

                <div class="field">
                      <div class="label">Hospitalization Release Date</div>
                     <input type="date" name="Hospitalization_Release_Date">
                </div>

                <div class="field">
                      <div class="label">Slot Allotment</div>
                     <input type="text" name="Slot_Allotment">
                </div>

                <div class="field">
                      <div class="label">Treatment Given</div>
                     <input type="text" name="Treatment_Given">
                </div>

                <div class="field">
                      <div class="label">Test Conducted</div>
                     <input type="text" name="Test_Conducted">
                </div>


                <div class="field">
                      <div class="label">Doctor Supervised ID</div>
                     <input type="id" name="Doctor_Supervised_ID">
                </div>

                <div class="field">
                      <div class="label">Doctor Name</div>
                     <input type="text" name="Doctor_Name">
                </div>

                <div class="field">
                      <div class="label">Medicine</div>
                     <input type="text" name="Medicine">
                </div>

                <div class="field">
                    <span class="help-block">*Required fields</span>
                </div>

                
                <div class="field btns">
                      <button class="prev-4 prev">Prevoius</button>
                      <button class="submit" name="submit">Submit</button> 
                </div>


                </form>
            </div>
            </div>

          
            <script src="js/script.js"></script>
     
    </body>
</html> 