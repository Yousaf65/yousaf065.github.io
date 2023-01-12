/*
		Name: PF PROJECT
		Author:  _NEHA SHAKOOR_
	    */
	    
	#include<iostream>
	#include<cstdlib>
	#include<ctime>
	#include <string>
	#include<windows.h>     //using Sleep() function
	
	
	
	using namespace std;
	
	
	//functions declaration
	void intro();
	void display();   
	void rules();
	int wordFill (char, string, string&);
	
	
	//global variable
	const int tries= 7; 
	
	
//      console the program	
	int main ()
	{
		char character;
		int wrongAttempt=0;
		string word;
		
		string words[]={"avator","inception","spiderman","thefather","paracite","1917",
		                 "joker","toystory","firstman","searching","infinitywar","colo","terminator",
						 "badboys","360days","ok","fightclup","nightout","12feet","spectre","shooter",
						 "madmax","ted2","zombie","seven","notebook","spilt","antman","ironman",
						 "harrypoter","twilight","wolverine","goal","dream","saw"};


	    
    // Calling rules function
    intro();
		
    // Calling rules function
	rules();
	
    cout<<"Press [ENTER] to start.";
    cin.get();
    system("cls");
   
    //calling display function
    display();
      
		
		
		//choose and copy a word from array of words randomly
		srand(time(NULL));
		int n=rand()% 35;
		
		word=words[n];
		// Initialize the secret word with the * character.
		string unknown(word.length(),'*');
	
		
		
 
	    
		// Loop until the guesses are used up
		while (wrongAttempt < tries)
		{
			cout<<"\n\n\t\t"<<"Here is the hint for guessing the name of movie "<<endl;
			cout<<"\n\n\t\t"<< unknown;
			cout<<"\n\n\t\tEnter a character you guess :";
			cin>>character;
			// Fill secret word with letter if the guess is correct,
			// otherwise increment the number of wrong guesses.
			if (wordFill(character, word, unknown)==0)
			{
				cout<<endl<<"Whoops! That letter isn't in there!" <<endl;
				wrongAttempt++;
			}
			else
			{
				cout << endl << "You found a letter! Isn't that exciting!" << endl;
			}
			
			// Tell user how many guesses has left.
			cout << "You have " << tries -  wrongAttempt;
			cout << " guesses left." << endl;
			
			// Check if user guessed the word.
			if (word==unknown)
			{
				cout << word << endl;
				cout << "Yeah! You got it!";
				break;
			}
		}
		if(wrongAttempt == tries)
		{
			cout << "\nSorry, you lose...you've been hanged." << endl;
			cout << "The word was : " << word << endl;
		}
		
		cin.ignore();
		cin.get();
		return 0;
	}
	
	/* 
	
	*/
	void intro()
	{
	    
	    cout<<"\n\n\t\t\tMIND READER GUESSING GAME"<<endl;
		cout<<"\n\t\t\t\tPF PROJECT"<<endl;
		cout<<"\n\n\t\tDeveloped by 'NEHA SHAKOOR' AND 'SAYYAM'"<<endl;
		cout<<"\n\n\t\tInstuctor: KHOLA NASEEM"<<endl;
		Sleep(10000);  //wait for 10 second
		
		system("cls");
		
	}
	/* 
	
	*/
	void rules()
	{
		cout << "\n\t\t\tMIND READER GUESSING GAME"<<endl;
		cout << "\n\t---------------------RULES FOR GAME-------------------------"<<endl;
		cout << "\n\n\tEvery character is represented by a star sign (*).";
		cout << "\n\n\tYou have to type only one charactor in one try";
		cout << "\n\n\tYou have " << tries << " tries to try and guess the movie name."<<endl;
		cout << "\n\t-------------------------------------------------------------"<<endl;
		
	}
	
	
	/* 
	
	*/
	void display()
	{
	  
    	cout<<"\n\t\t\tMIND READER GUESSING"<<endl;
		cout<<"\n\t-------------------------------------------------------------"<<endl;
		cout<<"\n\n\tYOU have to Guess the name of  hollywood movie "<<endl;
		cout<<"\n\t-------------------------------------------------------------"<<endl<<endl;
			
	}
	
	



	/* Take a one character guess and the secret word, and fill in the
	 unfinished guessword. Returns number of characters matched.
	 Also, returns zero if the character is already guessed. */
	
	int wordFill (char guess, string secretword, string &guessword)
	{
		int i;
		int matches=0;
		int len=secretword.length();
		for (i = 0; i< len; i++)
		{
			// Did we already match this letter in a previous guess?
			if (guess == guessword[i])
				return 0;
			// Is the guess in the secret word?
			if (guess == secretword[i])
			{
				guessword[i] = guess;
				matches++;
			}
		}
		return matches;
	}