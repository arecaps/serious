package palindrome;

/**
 *
 * @author aryehcaplan
 */
public class Palindrome {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        String sentance = args[0];
        //Change to all Lowercase
        String lower = sentance.toLowerCase();
            //remove all whitespace
            String test = lower.replaceAll(" ","");
            //Reverse string
            String reverse = new StringBuilder(test).reverse().toString();
            System.out.println(reverse);
                //Compare reverse to original
                int compare = test.compareToIgnoreCase(reverse);
                    //Print out the results
                    if(compare ==0){
                        System.out.println(args[0] + " is a palindrome!");
                    }else{
                        System.out.println("Sorry, "+ args[0] + " is not a palindrome");
                    }
                    
    }
    
}}
