<label for="cars">Choose a car:</label>

<select name="cars" id="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>






<!DOCTYPE html>
<html>
<body>


<form action="/action_page.php">
  <label for="cars">Choose a car:</label>
  <select name="cars" id="cars">
    <optgroup label="Swedish Cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
    </optgroup>
    <optgroup label="German Cars">
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </optgroup>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
 
</body>
</html>





-- Table structure for table `category`
CREATE TABLE `category` (

 `Category_ID` int(11) NOT NULL,

 `Category_Name` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `category`
INSERT INTO `category` (`Category_ID`, `Category_Name`) VALUES

(1, 'Kabarak '),
(2, 'kiamunyi'),
(3, 'Rafiki'),
(4, 'Kampi Ya Moto'),
(5, 'White House'),
(6, 'Green Yard'),
(7, 'OBT'),
(8, 'KK'),
(9, 'Arusha');



-- Primary Key Constraints
ALTER TABLE `category`

 ADD PRIMARY KEY (`Category_ID`);



 ADD KEY `Category_constraint` (`category_id`);
 
 
 
-- AUTO_INCREMENT for table `category`
ALTER TABLE `category`

 MODIFY `Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

 ADD CONSTRAINT `Category_constraint` FOREIGN KEY (`category_id`) 
 REFERENCES `category` (`Category_ID`) ON DELETE 
 CASCADE ON UPDATE CASCADE;