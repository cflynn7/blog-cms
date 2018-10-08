alert("Hello World!");

var firstName = "Jane"; // STRING type variable

var lastName = "Doe"; // STRING type variable

var age = 20; // NUMBER type variable

var married = true; // BOOLEAN type variable 

var childrenNames = ["Alice", "Bob"];  // ARRAY type variable 

var husband = { firstName: "John", lastName: "Doe", age: 35 }; // OBJECT type variable 

var fullName = firstName + " " + lastName;  // CONCATENATION operator

var dogYears = age/7;      // ARITHMETIC operator

var isAdult = dogYears > 4;      // COMPARISON operator

var isSettled = isAdult && married;   // INTEGER type variable 

function getFullName(firstName, lastName) { // Function name
    return firstName + " " + lastName;      // Returned value
}


var fullName =
getFullName(firstName, lastName); // Using VARIABLES 

var fullName = getFullName("Alice", "Doe");  // Using VALUES

console.log(fullName); 

document.write(fullName);

document.write("<h1>Hello World</h1>");

console.log(fullName);

if (isSettled) {
    document.write(fullName + " is settled.");
}  else {
    document.write(fullName + " is not settled.");
}

childrenNames.forEach(function(childName) {
    document.write("<li>" + childName + "</li>");
});