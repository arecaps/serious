import java.util.Scanner;


public class testScore {
    public static void main(String[] args){
        
        double score = 0;
        double total = 0;
        int scoreCount = 0;
      
        
        System.out.println("Enter some test scores from 0 to 1000, \nTo exit enter \"999\" ");
        System.out.println();
        Scanner sc = new Scanner(System.in);
        
            while(score  <= 100){
                System.out.print("Enter Score: ");
                score = sc.nextDouble();
                if(score <= 100){
                    total += score;
                    scoreCount++;
                }
            }
            double average = total/scoreCount;
                String results ="\n" +
                                "Number of tests: " + scoreCount + "\n" +
                                "Total of scores: " + total + "\n" +
                                "Average Grade:   " + average + "\n";
                System.out.print(results);

    }
}
