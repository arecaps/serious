package gradebook;

import java.util.ArrayList;
import java.util.Scanner;

public class GradeBook {

    public static void main(String[] args) 
    {   
        ArrayList<Student> students = new ArrayList<Student>();
        Scanner sc = new Scanner(System.in);
       
        String more = "y";
        int i = 0;
        while(more.equalsIgnoreCase("y")){
        
            System.out.print("Enter a student name:  ");
            String name = sc.next();
            students.add(new Student(name));

                String choice = "y";
                while(choice.equalsIgnoreCase("y")){
                System.out.print("Enter a grade for the student: ");

                students.get(i).addGrade(sc.nextInt());
                System.out.print("Would you like to add another grade? (y/n): ");
                choice = sc.next();
                    if(!choice.equalsIgnoreCase("y") & !choice.equalsIgnoreCase("n")){
                        System.out.print("Please enter either \"y\" or \"n\": ");
                        choice = sc.next();
                    }
                }
                    System.out.print("Would you like to add another student? (y/n): ");
                    more = sc.next();
                    i++;
                        if(!more.equalsIgnoreCase("y") & !choice.equalsIgnoreCase("n")){
                            System.out.print("Please enter either \"y\" or \"n\": ");
                            more = sc.next();
                        }
            }
           // for(int j=0; j< students.size(); j++){
             //   System.out.println(students.get(j).getName() + ": " + students.get(j).getAverage());
           // }
     
     String choice2 = "y";
     while(choice2.equalsIgnoreCase("y")){       
     System.out.print("Enter a name to get the average for that student: ");
     String find = sc.next();
        for (Student s : students) {
            if (s.getName().equals(find)){
                System.out.println(s.getName() + ": " + s.getAverage());
                System.out.print("Would you like to get the average for another student? (y/n): ");
                choice2 = sc.next();
                    if(!choice2.equalsIgnoreCase("y") & !choice2.equalsIgnoreCase("n")){
                        System.out.print("Please enter either \"y\" or \"n\": ");
                        choice2 = sc.next();
                    }
            } else {
                System.out.println("Student not found, please try again");
            }
        }
    }
    }
}
