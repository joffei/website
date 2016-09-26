// Name: Jesse Offei-Nkansah
// Email: jeoffei@gmail.com
// Honor Code: I have neither given nor received unauthorized help on this assignment
// Date: 12.9.2013 

// Description: This program plays a game with a user to find a hidden number
//	as many times as the user wants and outputs the statistics for the user's
//	game.

import java.util.*;

public class NumberGuess {
	public static final int MIN_NUMBER = 1; //define range minimum as constant
	public static final int MAX_NUMBER = 100;//define range maximum as constant
	public static Random rand = new Random(); //create random object
	//create Scanner object
	public static Scanner console = new Scanner(System.in);
	public static void main(String[] args) {
		gameplay();
		
	}
	
	//plays a game with the user
	public static void gameplay(){
		int games = 1; //initialize amount of games to 1
		int guesses = 0; //initialize total guesses to 0
		int amount = game(); //call game method; assign to "amount"
		guesses += amount; //total guesses updates
		boolean play = playAgain(); //call playAgain method
		int bestGame = amount; //initialize best game to first amount
		while(play){ //while "play" is true...
			amount = game(); //...call game method; assign to "amount"
			guesses += amount; //...total guesses updates
			games++; //...add 1 to games
			if(amount < bestGame){ //...if "amount" less than "betGame"...
				bestGame = amount; //...value of "amount" goes to "bestGame"
			}
			play = playAgain(); //call playAgain method
		}
		stats(games, guesses, bestGame); //call stats method
	}
	
	//plays a single game with the user
	public static int game(){
		int record = 1; //amount of guesses in a game
		int hidden = rand.nextInt(MAX_NUMBER) + 1; //get random number
		//Prompt user for a guess
		System.out.print("Okay, I'm thinking of a number between ");
		System.out.println(MIN_NUMBER + " & " + MAX_NUMBER + ".");
		System.out.print("Your guess? ");
		int guess = console.nextInt(); //assign guess to "guess"
		console.nextLine();
		while(guess != hidden){ //while "guess" isn't the random number...
			conditions(hidden, guess); //call conditions method
			System.out.print("Your guess? "); //...prompt for another guess
			guess = console.nextInt(); //assign new guess to "guess"
			console.nextLine();
			record++; //...add 1 to record
		}
		if(guess == hidden){ //if "guess" is the random number...
			correct(hidden, record); //call correct method
		}
		return record; //return "record"
	}
	
	//Display if user's guess is incorrect
	public static void conditions(int hidden, int guess){
		if(guess >= 1 && guess <= 100){ //if guess is in range...
			System.out.println("Sorry, that guess was incorrect.");
			if(hidden > guess){ //...if hidden is higher than guess...
				//...explain to user
				System.out.println("The number I'm thinking of is higher.");
			}
			if(hidden < guess){ //...if hidden is lower than guess...
				//...explain to user
				System.out.println("The number I'm thinking of is lower.");
			}
		}	
		if(guess < 1 || guess > MAX_NUMBER){ //...if hidden not in range...
			//...explain to user
			System.out.println("Your guess is out of range.");
			System.out.print("Your guess must be between 1 & ");
			System.out.print(MAX_NUMBER + ".");
		}
	}
	
	//Display if guess is correct
	public static void correct(int hidden, int record){
		//display to user
		System.out.print("Yes, the number I was thinking of was ");
		System.out.println(hidden + ".");
		if(record == 1){ //Display grammatically correct number of guesses
			System.out.println("You found it in " + record + " guesses.");
		}else{
			System.out.println("You found it in " + record + " guess.");
		}
	}
	
	//Ask user to play again
	public static boolean playAgain(){
		//Prompt for yes or no answer
		System.out.println("Do you want to play another game? (Y|N)");
		String answer = console.next(); //assign input to "answer"
		console.nextLine();
		answer = answer.substring(0, 1); //take first letter of "answer"
		answer = answer.toLowerCase(); //convert letter to lowercase
		if (answer.equals("y")){ //if "answer" is "y"...
			return true; //...return true
		}else{ //if not...
			return false; //...return false
		}
	}
	
	//display user's game statistics
	public static void stats(int num1, int num2, int num3){
		System.out.println("Overall results:"); //heading for stats
		System.out.println(" total games\t= " + num1);//display number of games
		System.out.println(" total guesses\t= " + num2);//display total guesses
		double numb = num1; //convert num1 to double
		double numc = num2; //convert num2 to double
		double numa = numc / numb; //find average guesses; assign to "numa"
		System.out.println(" guesses/game\t= " + numa); //display avg guesses
		System.out.println(" best game\t= " + num3);//display least amt guesses
	}
}