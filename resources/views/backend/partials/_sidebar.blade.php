<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            <a href="index.html"><img src="{{ asset('backend/img/logo1.png') }}" alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            @if (auth()->guard('staff'))
                <li class="nav-item">
                    <a href="{{ route('staff.index') }}" class="nav-link"><i class="flaticon-home"></i>
                        <span>Ana Səhifə</span></a>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Şagirdlər</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="{{ route('staff.student.index') }}" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Şagirdlər</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('staff.student.create') }}" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Yeni Şagird Əlavə Et</a>
                        </li>
                        <li class="nav-item">
                            <a href="student-promotion.html" class="nav-link">
                                <i class="fas fa-angle-right"></i>Student Promotion</a>
                        </li>
                    </ul>
                </li>
            @endif
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i
                        class="flaticon-multiple-users-silhouette"></i><span>Müəllimlər</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('staff.staff.index') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Müəllimlər</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('staff.staff.create') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Yeni
                            Müəllim Əlavə Et</a>
                    </li>
                    <li class="nav-item">
                        <a href="teacher-payment.html" class="nav-link">
                            <i class="fas fa-angle-right"></i>Payment</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Valideynlər</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('staff.parent.index') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>
                            Valideynlər</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('staff.parent.create') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>
                            Yeni Valideyn Əlavə Et</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-maths-class"></i><span>Siniflər</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('staff.grade.index') }}" class="nav-link">
                            <i class="fas fa-angle-right"></i>Siniflər</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('staff.grade.create') }}" class="nav-link">
                            <i class="fas fa-angle-right"></i>Yeni Sinif Əlavə Et</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-open-book"></i><span>Fənnlər</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('staff.subject.index') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Fənnlər</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('staff.subject.create') }}" class="nav-link">
                            <i class="fas fa-angle-right"></i>Yeni Fənn Əlavə Et</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-section"></i><span>Bölmələr</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('staff.section.index') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Bölmələr</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('staff.section.create') }}" class="nav-link">
                            <i class="fas fa-angle-right"></i>Yeni Bölmə Əlavə Et</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Kitabxana</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('staff.library.book.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>Kitablar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('staff.library.author.index') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Yazarlar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('staff.library.language.index') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Dillər</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('staff.library.category.index') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Janrlar</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Acconunt</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="all-fees.html" class="nav-link"><i class="fas fa-angle-right"></i>All Fees
                            Collection</a>
                    </li>
                    <li class="nav-item">
                        <a href="all-expense.html" class="nav-link"><i class="fas fa-angle-right"></i>Expenses</a>
                    </li>
                    <li class="nav-item">
                        <a href="add-expense.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                            Expenses</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="class-routine.html" class="nav-link"><i class="flaticon-calendar"></i><span>Class
                        Routine</span></a>
            </li>
            <li class="nav-item">
                <a href="student-attendence.html" class="nav-link"><i
                        class="flaticon-checklist"></i><span>Attendence</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="exam-schedule.html" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                            Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a href="exam-grade.html" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                            Grades</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="transport.html" class="nav-link"><i
                        class="flaticon-bus-side-view"></i><span>Transport</span></a>
            </li>
            <li class="nav-item">
                <a href="hostel.html" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
            </li>
            <li class="nav-item">
                <a href="notice-board.html" class="nav-link"><i
                        class="flaticon-script"></i><span>Notice</span></a>
            </li>
            <li class="nav-item">
                <a href="messaging.html" class="nav-link"><i
                        class="flaticon-chat"></i><span>Messeage</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Elements</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="notification-alart.html" class="nav-link"><i
                                class="fas fa-angle-right"></i>Alart</a>
                    </li>
                    <li class="nav-item">
                        <a href="button.html" class="nav-link"><i class="fas fa-angle-right"></i>Button</a>
                    </li>
                    <li class="nav-item">
                        <a href="grid.html" class="nav-link"><i class="fas fa-angle-right"></i>Grid</a>
                    </li>
                    <li class="nav-item">
                        <a href="modal.html" class="nav-link"><i class="fas fa-angle-right"></i>Modal</a>
                    </li>
                    <li class="nav-item">
                        <a href="progress-bar.html" class="nav-link"><i class="fas fa-angle-right"></i>Progress
                            Bar</a>
                    </li>
                    <li class="nav-item">
                        <a href="ui-tab.html" class="nav-link"><i class="fas fa-angle-right"></i>Tab</a>
                    </li>
                    <li class="nav-item">
                        <a href="ui-widget.html" class="nav-link"><i class="fas fa-angle-right"></i>Widget</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="map.html" class="nav-link"><i class="flaticon-planet-earth"></i><span>Map</span></a>
            </li>
            <li class="nav-item">
                <a href="account-settings.html" class="nav-link"><i
                        class="flaticon-settings"></i><span>Account</span></a>
            </li>
        </ul>
    </div>
</div>
