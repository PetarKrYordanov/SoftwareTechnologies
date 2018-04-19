import java.util.Scanner;

public class SymmetricNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int n = Integer.parseInt(scanner.nextLine());
        for (int i = 1; i <= n; i++) {
            String currentNum = String.valueOf(i);

            String currentNumReverse = reverse(currentNum);

            if (currentNum.equals(currentNumReverse)) {
                System.out.println(i);
            }
        }
    }

    private static String reverse(String currentNum) {
        StringBuilder stringBuilder = new StringBuilder();
        for (int i = currentNum.length() - 1; i >=0; i--) {
            stringBuilder.append(currentNum.charAt(i));
        }
        return String.valueOf(stringBuilder);


    }
}

