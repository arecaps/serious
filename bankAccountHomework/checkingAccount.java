
package bankaccount;

public class checkingAccount extends Account{
    
    @Override
    public void endOfMonth(){
        int fee = -10;
        if(balance < 1000)
            balance += fee;
    }
}

