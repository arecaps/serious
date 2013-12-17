import java.util.Scanner;


public class InvoiceApp {
    
    public static void main(String[] args){
        
        double discountPercent = 0;
        String end = "y";
            
            while(end.equalsIgnoreCase("y")){
                System.out.println("Welcome to the Invoice Total Calculator");
                System.out.println();
                System.out.print("Enter the list price: $");
                Scanner sc = new Scanner(System.in);
                double subtotal = sc.nextInt();      
                    if(subtotal >= 200){
                        discountPercent = .15;
                    } else if(subtotal >=100){
                        discountPercent = .10;
                    } else {
                        discountPercent = .05;
                    }
                System.out.println();
                double discountAmount =subtotal*discountPercent;
                double invoiceTotal = subtotal - discountAmount;

                System.out.println("Subtotal:\t $" + subtotal);
                System.out.println("Your discount is: " + discountPercent*100 + "%");
                System.out.println("Discount Amount: $" + discountAmount);
                System.out.println("Total:\t\t $" + invoiceTotal);
                System.out.println();
                
                System.out.print("Do you want to continue? (y/n): ");
                end = sc.next();
                System.out.println();
            }
    }
}

