package bankaccount;

import java.util.*;

public class BankAccount {
    
    public static void main(String[] args) {
        int balance =0;
        
        ArrayList<Account> accounts = new ArrayList<Account>();
        accounts.add(new savingsAccount());
        accounts.add(new checkingAccount());
        accounts.add(new savingsAccount());
        accounts.add(new checkingAccount());
        
        for(Account account : accounts){
            int amount = new Random().nextInt(650)+650;
            account.addTransaction(amount);
        }
        for(Account account : accounts){
            System.out.println(account.getBalance());
        }
        for(Account account : accounts){
            account.endOfMonth();
        }
        for(Account account : accounts){
            System.out.println(account.getBalance());
        }
    }
    
}

