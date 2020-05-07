
//  =============================================================>> 
//////////////////////////////////////////////////////////////////////////////////////////////////////
                                                                                                    //  
//  ========================== الملاحظة الاولى  ===================>>                                //
                                                                                                    // 
//////////////////////////////////////////////////////////////////////////////////////////////////////

// ********************** الصفحة ***************************************

// head.php
// 7السطر 4

// *********************** الكود ***************************************

<?php 
    session_start();
 ?>


 // ********************************الملاحظة ******************************

 //  في اول الصفحة عشان بتعمل مشاكل session_start بنحط 
 //The important thing is that the session_start function must be called at the beginning of the script, 
   before any output is sent to the browser.
   Otherwise, you’ll encounter the infamous Headers are already sent error.



//////////////////////////////////////////////////////////////////////////////////////////////////////
                                                                                                    //  
//  ================== الملاحظة الثانيه  ==================>>    //
                                                                                                    // 
//////////////////////////////////////////////////////////////////////////////////////////////////////


// // ************************** الصفحة ***********************************

// about.php  
// السطر 47


// ****************************** الكود **********************************


    <form  class="edit" action="new.php" method="POST">
            <input type="submit" class="edit"  value=" create new">
        </form>
        <form  class="edit" method="POST" action="edit.php">
            <input class="edit"  type="submit"  value="edit">
        </form>
        <form class="edit" action="edit.php" method="POST">  
            <input class="edit"  type="submit"  value="delete">
     </form>



 // ****************************** الملاحظة **********************************

// عشان نتنقل من صفحة لصفحة تانيه بس من غير منبعت بيانات بنستخدم 
<a href=""></a>
// ملهاش لازمه خالص استخدام الفورم 

 // ******************************* الحل **************************************

<a href="new.php"></a>
<a href="edit.php"></a>
 <a href="delete.php"></a>     

// كده  bootstrap استخدميbutton لو عايزه تخليهم علي شكل 
<a href="new.php" class="btn btn-dark btn-sm"></a>
<a href="edit.php" class="btn btn-dark btn-sm"></a>
<a href="delete.php" class="btn btn-danger btn-sm"></a>    

// المهم يعني متستخدميش الفورم عشان تتنقلي من صفحة للتانيه 
 

//////////////////////////////////////////////////////////////////////////////////////////////////////
                                                                                                    //  
//  ========================== الملاحظة التالتة ============================>>                         //
                                                                                                    // 
//////////////////////////////////////////////////////////////////////////////////////////////////////


// // ************************** الصفحة ***********************************

// personal_analysis.php 
// السطر 57


// ****************************** الكود *********************************


//   <?php

          if(  $_POST["color"]=="Blue" && $_POST["place"]=="Garden" && $_POST["love"]=="your_father")
           { 
              echo
                " <h5> RESULT</h5>
                <p>
                Ali, You are an innocent, calm and gentle person, You love freedom and kind-hearted,
                You are a passionate and affectionate person .
                </p>
                <h3>THANK YOU</h3>";

           }
     ?>
 


 // ****************************** الملاحظة ***********************************

 // echo بتستخدمى 
 // عالتاجات ودي حاجة مش حلوة خالص وبتعمل مشاكل كتير 
 // اول حاجة لو الديزاينر الي شغال معاكي حب يعدل في الكود مش هيعرف وهيتلخبط 
 // ده غير انه ممكن يحصل مشاكل بسبب السنجل و الدابل كوت 
 // وكمان متعب بالنسبالك انك تحطي ايكو علي كل التاجات الي ممكن تكون طويلة جدا عشان تطبعي متغير واحد 
 // غير انك بتفضلي تظبطي السنجل والدابل كوت وتعملي كونكاتنيت بنهم 
 // **************************************
 // * خالص html على كود echo متستخدميش *
 // **************************************
 // انا عارف انها حاجه بسيطة دلوقتى بس انا بتكلم علي بعد كده 
 // وعشان متتعوديش ع الطريقة دي 


 // ******************************* الحل *************************************
      
      <?php 
             if(  $_POST["color"]=="Blue" && $_POST["place"]=="Garden" && $_POST["love"]=="your_father")
             {
        ?>
              <h5> RESULT</h5>
                <p>
                  <?php echo "Ali, You are an innocent, calm and gentle person, You love freedom and kind-hearted,
                   You are a passionate and affectionate person ." ?>
                </p>
                <h3>THANK YOU</h3>

             <?php } 
                     // وتكملي الكود بعد كده عادى 
             ?>
 //
  


        
 //////////////////////////////////////////////////////////////////////////////////////////////////////
                                                                                                    //  
//  =============================== ملاحظات =============================>>                         //
                                                                                                    // 
//////////////////////////////////////////////////////////////////////////////////////////////////////
// حاولي علي قد متقدري تفصلي الباك ايند عن الفرونت  
// فيها ال about يعنى مثلا صفة ال  
// Update , Add , Delete 
//  بس بس اظن انك كنتي هتعملي الباقي فيها المهم add او انتي عاملةال 
// نصحتي انك تفصليهم.. تكريتي فولدر جديد 
// دي functions وتحطي فيه كل  
// تانية في الموقع زي functions واي 
// Logout, Login , وهكذا
// جوا الفولدر ده files تحطيهم في 
// wait الي اسمها login يعني انتي حاطه صفحةالي بتعمل 
// "مش عارف ليه مسمياها كده الاحسن تسيمها اسم يدل ع الي بتعمله" 
// المهم انتي حطاها مع الصفحات الاساسية بتاعت الموقع 
// معينه function لا افصلي صفحات الموقع الاساسيه عن الصفحات الي بتعمل 
// وصلت ؟
///  ***********

 //////////////////////////////////////////////////////////////////////////////////////////////////////
                                                                                                    //  
//  =============================== المطلوب =============================>>                         //
                                                                                                    // 
//////////////////////////////////////////////////////////////////////////////////////////////////////

**************
نصحيتي تستخدمي التصميم الي انا عامله عشان متشغليش بالك بالتصميم 
وكمان عشان لو بعد كده ضيفنا حاجه جديده في البروجيكت متصممهاش انتي من الاول 
وبالنسبة للكود الي انت كتبتيه ممكن تاخديه كوب وبست عادي بس ابقي ظبطي الحاجات الي قول عليها 
*************

// 1- اعملي اتشك علي تسجيل الدخول 
// name , password بتكون من array فيها array اعملي 
// واعملي اتشك عليهم 
// 2- logout يعمل button عايز 
// 3-  فيها اسماء الصور واعرضيهم array عايزك تعملي image في صفحة ال 
// 4- بتاع الصورة ويعرضها في الصفحة الي بتعرض الصورة index لما تتغطي ع الصورة ياخد ال 
// 5- ميكونش مكتوب كده في الكود عايزه يجي من ملف about انا عايز النص بتاع
// وتعرضي المحتوي الي فيه وده يكون نص ديفولت file.txt 
// 6-input جديد و فيه النص الي جاي من ال  file.txt لما يعمل كريت مش يضيف ع النص لا يكريت 
//  باسم الملف ده ويعرضه coockie ويكريت 
// coockie فكده لهنعرض الملف الديفولت لا الملف الي في
// في اختبار الشخصيه عندك احتمالات كتير انتي عامله احتمال واحد 
// ويستحسن تفصيل الكود الي بيطلع النتيجه ده عن الكود بتاع الصفحة نفسها 