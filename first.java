package javaapplication3;

/**
 *
 * @author aryehcaplan
 */
public class Strings {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        String test = args[0];
        String reverse = new StringBuilder(test).reverse().toString();
        int compare = test.compareToIgnoreCase(reverse);
            if(compare ==0){
                System.out.println(args[0] + " is a palindrome!");
            }else{
                System.out.println("Sorry, "+ args[0] + " is not a palindrome");
            }
    }
    
}
