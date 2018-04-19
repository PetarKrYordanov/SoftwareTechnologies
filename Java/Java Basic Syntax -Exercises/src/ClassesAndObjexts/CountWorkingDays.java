package ClassesAndObjexts;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.Scanner;

public class CountWorkingDays {
    public static void main(String[] args) throws ParseException {

        Scanner scanner = new Scanner(System.in);

        SimpleDateFormat format = new SimpleDateFormat("dd-MM-yyyy");
        Date date1 = format.parse(scanner.nextLine());
        Date date2 = format.parse(scanner.nextLine());
        Calendar startDate = Calendar.getInstance();
        startDate.setTime(date1);
        Calendar endDate = Calendar.getInstance();
        endDate.setTime(date2);
        endDate.add(Calendar.DATE, 1);
        int count = 0;

        int[] holidayDays = {1, 3, 1, 6, 24, 6, 22, 1, 24, 25, 26};
        int[] holidayMonths = {1, 3, 5, 5, 5, 9, 9, 11, 12, 12, 12};

        for (Calendar currentDate = startDate;
             currentDate.before(endDate);
             currentDate.add(Calendar.DATE, 1)) {

            if (currentDate.get(Calendar.DAY_OF_WEEK) == Calendar.SATURDAY
                    || currentDate.get(Calendar.DAY_OF_WEEK) == Calendar.SUNDAY) {
                continue;
            }
            boolean isHolidayDays = false;

            for (int i = 0; i < holidayMonths.length; i++) {
                int month = currentDate.get(Calendar.MONTH) + 1;
                int date = currentDate.get(Calendar.DATE);
                if (month == holidayMonths[i] && date == holidayDays[i]) {
                    isHolidayDays = true;
                    break;
                }
            }
            if (isHolidayDays) {
                continue;
            }
            count++;
        }
        System.out.println(count);
    }
}
