
package bankaccount;

public class savingsAccount extends Account{
    
    @Override
    public void endOfMonth(){
        double interest = balance * .05/12;
            balance += interest;
    }
}

