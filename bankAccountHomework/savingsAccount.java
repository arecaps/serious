
package bankaccount;

public class savingsAccount extends Account{
    private String acctTypeNo;
    
    @Override
    public void endOfMonth(){
        double interest = balance * .05/12;
            balance += interest;
    }
    @Override
    public String getAccountNum(){
        acctTypeNo = "Savings Acct no. " + super.getAccountNum();
        return acctTypeNo;
    }
}  

