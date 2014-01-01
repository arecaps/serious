package bankaccount;

import java.util.*;

public class BankAccount {
    
    public static ArrayList<Account> accounts = new ArrayList<Account>();

    public static void endMonth(){
        System.out.println("\nAfter the end of the month...\n");
        for(Account account : accounts){
            account.endOfMonth();
        }
    }
    
    public static void main(String[] args) {

        BankAccount bankAccount = new BankAccount();
	
        accounts.add(new savingsAccount());
        accounts.add(new checkingAccount());
        accounts.add(new savingsAccount());
        accounts.add(new checkingAccount());
        
        for(Account account : accounts){
            int amount = new Random().nextInt(700)+700;
            account.addTransaction(amount);
        }
        for(Account account : accounts){
            account.setAccountNum();
            System.out.println(account.getAccountNum() + ",\tBalance: " + account.getBalance());
        }
        bankAccount.endMonth();

        for (Account account : accounts) {
            account.print();
        }
    }
}
