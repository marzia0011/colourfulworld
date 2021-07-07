<!DOCTYPE html>
<html lang="en">


<head>
   <meta charset="UTF-8">
   <title>Colorful World</title>
   <link rel="stylesheet" href="./styles.css">
</head>
<body> 
<img src="images/logo-1.jpg" 
    weight = 750;
    height =350;
    alt="color instruments"> 
    

<?php 
echo "<h1 style ='color:red;'>Colorful World</h1>";
?>  
<?php
echo "<h3 style = 'color:blue;'>
Life is meaningful with some words,
Time is important to motivate us all , 
Colours are important to colourful the world,
This colours are thinking us to which and what thing we may use,
We see rainbow to the sky, 
Which has 7colours like seven stars,
The colours of the rainbow,colourful the stars that may concern to work, 
create identity and make us colourful stars.
The colour is green,red and yellow we maintain the traffic jam, go to our destination in proper time.
The colours are red,blue, green and yellow to painting the nature in thousands time.
The nature, when white ,
White colour give us alive to give us green signal.
When black, 
Black colour give us attention far away 
From  red signal.
In the end we the people love our self 
Want to live and count the day time more and  more
Otherwise black colour make our life destroyed and give us lifeless alarm.
</h3>";?>


<?php 
echo "<h2 style ='color:green;'>INSTRUMENTS</h2>";
?> 
<?php
echo "<h3 style = 'color:red;'>


1)pen🖋️
2)pencil📝
3)paint pencil🖌️
                   
  
This three  instruments or tools  are very powerful for each and every students life.
1st of one is 🖋️ (pen). This create each and every people true thought on papers. This thought cannot be  erased.
Second one-📝 this one is same as a pen. But the difference between pen and pencil is that pen is created many kinds of thought of people.other people cannot eraser it . The opportunity of every people or students can be changed their thought in the instrument of pencil. This is also useful to draw nice pictures, nice curves and many other geomatric figure by a moment.
🖌️-this called paint pencil. This paints every art lovers student's drawing pictures and colourize their drawing pictures with a few seconds . This is also related to the students heart reactions and target their pictures in the colourful way what they thinks in their heart canvas.
There are three kinds of colour . They are-pencil colour , water colour and the other colours . 
</h3>";?>

<?php 

echo "<h1 style ='color:red;'>Family Of Mother</h1>";

  $db = new mysqli('localhost','root','','Family');
  $sisters = $db->query('SELECT * FROM relatives where side = 2');
  while ( $row = $sisters->fetch_array() ) {
   echo $row['id']." -> ".$row['name']." -> ".$row['children']." -> ".$row['serial']."<br>";
}

echo "<h1 style ='color:blue;'>Family Of Father</h1>";
  
  $db = new mysqli('localhost','root','','Family');
  $brothers = $db->query('SELECT * FROM relatives where side = 1');
  while ( $row = $brothers->fetch_array() ) {
     echo $row['id']." -> ".$row['name']." -> ".$row['children']." -> ".$row['serial']."<br>";
  }


$db->close();
  ?>
   <script src="./main.js"></script>

   <?php 
 echo "<h1 style ='color:blue;'>Profession:Father's Family
 
 </h1>";?>
   <?php 
 echo "<h3 style ='color:black;'>Profession Of Shahidullah:retired officer (Minitry Of Planning).
 
 </h3>";?>
   <?php 
 echo "<h3 style ='color:black;'>Profession Of Rahmatullah:retired officer (Doctor Of Delta Medical College).
 
 </h3>";?>
   <?php 
 echo "<h3 style ='color:black;'>Profession Of Obaidullah:retired officer (Civil Engineer).
 
 </h3>";?>
    <?php 
 echo "<h3 style ='color:black;'>Profession Of Habibullah:retired officer (Minitry Of Planning).
 
 </h3>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession Of Naju:House Wife (educated).
 
 </h3>";?>
<?php 
 echo "<h3 style ='color:black;'>Profession Of Azma:House Wife (educated).
 
 </h3>";?>
<?php 
 echo "<h3 style ='color:black;'>Profession Of Iftara:House Wife (educated).
 
 </h3>";?>
<?php 
 echo "<h3 style ='color:black;'>Profession Of Aysha:House Wife (educated).
 
 </h3>";?>
<?php 
 echo "<h3 style ='color:black;'>Profession Of Hasina:House Wife (educated).
 
 </h3>";?>

<?php 
 echo "<h1 style ='color:red;'>Profession:Mother's Family
 
 </h1>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession Of Jahanara Begum: retired principle officer (janata bank).
 
 </h3>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession Of Delowara Akhter: Assistant Professor (Khilgoan Girls School & College).
 
 </h3>";?>
<?php 
 echo "<h3 style ='color:black;'>Profession Of Monirul Islam: settled in America (USA).
 
 </h3>";?>
<?php 
 echo "<h3 style ='color:black;'>Profession Of Jahirul Islam: service holder.
 </h3>";?>

<?php 
 echo "<h1 style ='color:blue;'>Profession:Father's Side Siblings
 
 </h1>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession:1)Shahidullah's Daughter :Shammi (professor of tejgao college)
 2)Shahidullah's son : *Amdad (EEE Engineer) lives in Germany
 *Santu (EEE Engineer) lives in Bangladesh 
 *Ahmed (Doctor) :intern ,lives in Bangladesh.
 </h3>";?>
<?php 
 echo "<h3 style ='color:black;'>Profession:1)Shahidullah's Daughter :Siba (Doctor in USA MEDICAL COLLEGE)lives in America
 2)Rahmatullah's son :*Fahim (Doctor & student)lives in USA.
 *Salman (student) lives in USA.
 </h3>";?>
<?php 
 echo "<h3 style ='color:black;'>Profession:
 Obaidullah's  son : *Adil (BS & MS in pharmacy)lives in Bangladesh.
*Nabil(Student) lives in Bangladesh.
 </h3>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession:
 Habibullah's  children  : *Marzia Mahjabin(BScomputer science & Engineer)lives in Bangladesh.
*Md.Rahat Anant Habib (BBA student at NSU)lives in Bangladesh.
 </h3>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession:
NAJU'S Daughter :*Sonia (Doctor) lives in Bangladesh.
*Tithi (Doctor)lives in Bangladesh
NAJU'S Son:*Sawan(Textile Engineer)lives in Bangladesh.
*Sami (Student)lives in Bangladesh.
 </h3>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession:
AJMA'S Daughter :*Mukta (BBA &MBA) lives in Bangladesh.
AJMA'S Son :*Munna (Bsc & Msc in Cse)lives in Bangladesh.
 </h3>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession:
IFTARA'S son :*Setu (civil engineer) project engineer.lives in Bangladesh.
IFTARA'S Son :*Mitu (Bsc  in Cse)lives in Bangladesh.
 </h3>";?>
<?php 
 echo "<h3 style ='color:black;'>Profession:
AYSHA'S son :*Asif(civil engineer) Msc in Environmental Science .tobacco company service holder.lives in Bangladesh.
AYSHA'S Son :*Anan (student in civil engineering)at iut.lives in Bangladesh.
 </h3>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession:
HASINA's  Daughter :*Mohuya(VNS STUDENT)lives in Bangladesh.
</h3>";?>

<?php 
 echo "<h1 style ='color:red;'>Profession:Mother's Side Siblings
 
 </h1>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession:
Jahanara Begum's  Daughter :*Kakon(BS & MS in Economics )House Wife.lives in Bangladesh.
Jahanara Begum's Son :* Santo (uno ,acland , majistrat ) .lives in Bangladesh.
*shuvro (directer in petro bangla)lives in Bangladesh.
</h3>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession:
 Delowara Akhter's  children  : *Marzia Mahjabin(BScomputer science & Engineer)lives in Bangladesh.
*Md.Rahat Anant Habib (BBA student at NSU)lives in Bangladesh.
 </h3>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession:
Monirul Islam's Daughter :*omi (service holder ) lives in USA.
*Obonti (service holder ) lives in USA.
</h3>";?>

<?php 
 echo "<h3 style ='color:black;'>Profession:
Jahirul Islam Daughter :*Marzan Islam(student in eee) eastwest university.lives in Bangladesh.
</h3>";?>


</body> 
</html>