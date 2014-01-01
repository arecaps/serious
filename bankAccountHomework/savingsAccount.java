package bankaccount;

public class savingsAccount extends Account{
    private String acctTypeNo;
    
    @Override
    public void endOfMonth(){
        double interest = balance * .05/12;
            addTransaction((int)interest);
    }
    @Override
    public String getAccountNum(){
        acctTypeNo = "Savings Acct no. " + super.getAccountNum();
        return acctTypeNo;
    }
    @Override
    public void print() {
        System.out.println("I am a savings account, my balance is $" + balance);
    }
}  

