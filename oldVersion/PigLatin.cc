// Jesse Offei-Nkansah
//Section 003
//09.18.2014
//OLA 3
//Description:  This program will take in a three word
//	sentence from the user and output the sentence
//	and another version of the sentence in pig latin.

#include <iostream>
#include <string>
#include <iomanip>
using namespace std;


string capitalize(string word);
string pig(string word);
string casing(string word);

int main ()
{
	string word1, word2, word3;
	
	cout << "This program will take a three word sentence and "
	<< "translate it into pig latin." << endl;
	cout << "Enter the first word of your sentence: ";
	cin >> word1;
	cout << "Enter the second word of your sentence: ";
	cin >> word2;
	cout << "Enter the last word of your sentence: ";
	cin >> word3;
	cout << endl;
	
	
	cout << "Your sentence is: " << endl;
	cout << capitalize(word1) << " " << casing(word2) << " " << casing(word3) << "." << endl << endl;
	
	cout << "And translated into Pig Latin it is: " << endl;
	cout << capitalize(pig(word1)) << " " << pig(word2)
	<< " " << pig(word3) << "." <<  endl << endl;
	
	return 0;
}

string capitalize(string word)
{
	char capLet = toupper(word.at(0));
	return capLet + casing(word.substr(1, word.length() -1));
}

string pig(string word)
{	
	
	return casing(word.substr(1, word.length()-1) + word.at(0) + "ay");
}

string casing(string word){
	string cased;
	for(int i = 0; i < word.length(); i++){
		cased += tolower(word.at(i));
	}
	return cased;
}
