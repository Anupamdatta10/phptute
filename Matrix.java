import java.util.Scanner;
class A 
{
    public static void fun() 
    {
        System.out.print("fun");
        
    }
    public void fun2()
    {
        System.out.print("fun2");
    }
}
class Matrix
{
    
     public static void main(String[] args) {
      int x=1,y;
      y=++x+x+++(--x);
      System.out.print(y);
      System.out.print(x);
    }      
}