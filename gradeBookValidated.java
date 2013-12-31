package gradebook;

import java.util.ArrayList;
import java.util.Scanner;

public class GradeBook {

    public static void main(String[] args) 
    {   
        ArrayList<Student> students = new ArrayList<Student>();
        Scanner sc = new Scanner(System.in);

        String more = "y";
        int j;
        int i = 0;
        while(more.equalsIgnoreCase("y")){
        
            System.out.print("Enter a student name:  ");
            String name = checkName(sc);
            students.add(new Student(name));
            
                //Loop to get grades for each student
                String choice1 = "y";
                while(choice1.equalsIgnoreCase("y")){
                System.out.print("Enter a grade for the student: ");

                int testGrade = checkRange(sc);
                students.get(i).addGrade(testGrade);
                choice1 = confirmContinue(sc, "Would you like to add another grade? (y/n): ");
                }
                    more = confirmContinue(sc,"Would you like to add another student? (y/n): ");
                    i++;	
			}
     
     String choice2 = "y";
     while(choice2.equalsIgnoreCase("y")){ 
     j =0;
     System.out.print("Enter a name to get the average for that student: ");
     String find = sc.next();
        for (Student s : students) {
            if (s.getName().equals(find)){
                System.out.println(s.getName() + ": " + s.getAverage());
                choice2 = confirmContinue(sc, "Would you like to get the average for another student? (y/n): ");
            } else {
                j++;
            }
        }
        if(j == students.size())
            System.out.println("Student not found, please try again");
    }
    }
    public static String confirmContinue(Scanner sc, String prompt){
        String choice;
        System.out.print(prompt);
                choice = sc.next();
                    while(!choice.equalsIgnoreCase("y") & !choice.equalsIgnoreCase("n")){
                        System.out.print("Please enter either \"y\" or \"n\": ");
                        choice = sc.next();
                    }
                    return choice;
    }
	public static int validGrade(Scanner sc){
            boolean isValid = false;
            int grade =0;
                while(isValid == false){
                    if (sc.hasNextInt()){
                        grade = sc.nextInt();
                        isValid = true;
                    } else {
                        System.out.print("Invalid Integer, Enter a whole number between 0 and 100: ");
                        sc.nextLine();
                    }
                    sc.nextLine();
               }
                    return grade;
	}
        public static int checkRange(Scanner sc){
            boolean isValid = false;
            int grade =200;
                while(isValid == false){
                    grade = validGrade(sc);
                    if(grade >= 0 && grade <= 100){
                                isValid = true;  
                    } else {
                        System.out.print("Invalid Integer, Enter a whole number between 0 and 100: ");
                    }
               }
                    return grade;
        }
	public static String checkName(Scanner sc) {
	    String test;
            while (true) {
                test = sc.next();
                if (test.matches("[a-zA-Z]+")) {
                    break;
                } else {
                    System.out.print("Name must contain only letters.\nEnter a student name:  ");
                }
                sc.nextLine();
            }
            return test;
       }
}
