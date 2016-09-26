//Jesse Offei-Nkansah
//Section 003
//10.15.2014
//OLA 7
//Description: This program allows the user to select a catagory of charges and
//			displays the total amount spent over a month in that catagory.

#include <iostream>
#include <string>
#include <iomanip>
#include <fstream>

using namespace std;

//structured variable declaration
struct catagory{
	string place;
	float expense;
	bool calc;
};

struct charge{
	float total;
	int index;
	catagory one;
	catagory two;
	catagory three;
	catagory four;
	catagory five;
};
	
//function prototypes
void getSum(catagory&, string);
float getPrice(ifstream&);
void prompt(charge&, ifstream&);
void exitMessage();


int main(){
	
	//local variable declarations
	catagory rest = {"Restaurant", 0, true},
		groc = {"Groceries", 0, true},
		mort = {"Mortgage", 0, true},
		gas = {"Gas", 0, true},
		ent = {"Entertainment", 0, true}, holder;
	charge bill = {0, 0, rest, groc, mort, gas, ent};
	ifstream inData;
	
	prompt(bill, inData);
	
	
	return 0;
}

void getSum(catagory& cat, ifstream& inData){
	//local variable declaration
	string creditor;	//hold the name of the catagory
	//open file
	inData.open("FinancialData.txt");
	
	//if amount has not already been calculated
	if(cat.calc){
		inData >> creditor >> creditor; //get the first name of the catagory
		do{
			if(creditor == cat.place){ //if catagory is correct...
				cat.expense += getPrice(inData); //...update price
			}
			inData.ignore(300, '\n'); //go to the end of the line
			inData >> creditor >> creditor; //get next catagory
		}while(inData); //while file is not complete
		//close input file
		inData.close();
		//increment counter
		cat.calc = false;
	}
	//print total spent for catagory
	cout << "The total spent for " << cat.place << " is $" << cat.expense << "."
		<< endl << endl;
}

float getPrice(ifstream& inData){
	//local variable declaration
	float price;
	
	//get price
	inData.ignore(300, '$');
	inData >> price;
	return price;
}

void prompt(charge& bill, ifstream& inData){
	//display catagory options to user
	cout << "Enter the menu number for the catagoey you are interested in" << endl;
	cout << "And the program will show you how much was spent in that category" << endl << endl;
	cout << "1. Restaurants" << endl
		<< "2. Grocereies" << endl
		<< "3. Mortgage" << endl
		<< "4. Gas" << endl
		<< "5. Entertainment" << endl
		<< "6. Quit Program" << endl;
	cin >> bill.index;
	
	//do action base on index
	switch (bill.index){
		case 1:
			getSum(bill.one, inData);
			break;
		case 2:
			getSum(bill.two, inData);
			break;
		case 3:
			getSum(bill.three, inData);
			break;
		case 4:
			getSum(bill.four, inData);
			break;
		case 5:
			getSum(bill.five, inData);
			break;
		case 6:
			exitMessage();
			break;
		default:
			cout << "Invalid category option.  Please try again." << endl;
			break;
	}
	if(bill.index != 6){
		//rerun prompt function
		prompt(bill, inData);
	}
}

void exitMessage(){
	//print goodbye message
	cout << "Thank You!  Goodbye." <<endl;
}
