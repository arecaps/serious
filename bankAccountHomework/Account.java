package bankaccount;

import java.util.Random;

public abstract class Account implements Printable{
    protected int balance;
    protected long acctNo;
    protected String acctNum;
    
    public void Account(){
    }
    
    public int getBalance(){
        return balance;
    }
    public void addTransaction(int amount){
        balance += amount;
    }
    public long addAccountNo(){
        acctNo = new Random().nextInt(100000000)+15287635;
        return acctNo;
    }
    public void setAccountNum(){
        acctNum = "" + addAccountNo();
    }
    public String getAccountNum(){
        return acctNum;
    }
    public abstract void endOfMonth();
    
    @Override
    public abstract void print();
}
